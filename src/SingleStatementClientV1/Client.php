<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

use Generator;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\Exception\OngoingException;

class Client implements ClientInterface
{
    use ClientV1\Client\AwareTrait;
    use ClientV1\StatementsRequest\Body\BindVariable\Map\Builder\Factory\AwareTrait;
    use ClientV1\StatementsRequest\Body\Factory\AwareTrait;
    use ClientV1\StatementsRequest\Factory\AwareTrait;
    use ClientV1\StatementsRequest\QueryParameters\Factory\AwareTrait;
    use FetchResult\Builder\Factory\AwareTrait;
    use SubmissionResult\Builder\Factory\AwareTrait;

    public function setClientV1JwtTokenGenerator(
        ClientV1\JwtTokenGeneratorInterface $jwtTokenGenerator
    ): ClientInterface {
        $this->getClientV1Client()->setClientV1JwtTokenGenerator($jwtTokenGenerator);
        return $this;
    }

    private function submit(
        string $statement,
        ?array $bindingVariables = null,
        ?ClientV1\StatementsRequest\QueryParametersInterface $queryParameters = null
    ): SubmissionResultInterface {
        $request = $this->getClientV1StatementsRequestFactory()->create();
        $request->setMethod('POST');
        $request->setPath('/api/v2/statements');
        if (isset($queryParameters)) {
            $request->setQueryParameters(
                $queryParameters
            );
        }
        $body = $this->getClientV1StatementsRequestBodyFactory()
            ->create()
            ->setStatement($statement);
        if (isset($bindingVariables)) {
            $body->setBindings(
                $this->getClientV1StatementsRequestBodyBindVariableMapBuilderFactory()
                    ->create()
                    ->setValues($bindingVariables)
                    ->build()
            );
        }
        $request->setBody($body);
        $resultSet = $this->getClientV1Client()->authorizeAndSend($request);
        return $this->getSingleStatementClientV1SubmissionResultBuilderFactory()
            ->create()
            ->setClientV1ResultSet($resultSet)
            ->build();
    }

    private function fetch(
        string $statementHandle,
        int $pageIndex,
        ClientV1\ResultSet\ResultSetMetaDataInterface $resultSetMetaData
    ): FetchResultInterface {
        $request = $this->getClientV1StatementsRequestFactory()->create();
        $request->setMethod('GET');
        $request->setPath('/api/v2/statements/' . $statementHandle);
        $request->setQueryParameters(
            $this->getClientV1StatementsRequestQueryParametersFactory()
            ->create()
            ->setPartition($pageIndex)
        );
        $resultSet = $this->getClientV1Client()->authorizeAndSend($request);
        return $this->getSingleStatementClientV1FetchResultBuilderFactory()
            ->create()
            ->setClientV1ResultSet($resultSet)
            ->setClientV1ResultSetResultSetMetaData($resultSetMetaData)
            ->build();
    }

    private function cancel(string $statementHandle): ClientInterface
    {
        $request = $this->getClientV1StatementsRequestFactory()->create();
        $request->setMethod('POST');
        $request->setPath('/api/v2/statements/' . $statementHandle . '/cancel');
        $this->getClientV1Client()->authorizeAndSend($request);

        return $this;
    }

    public function execute(
        string $statement,
        ?array $bindingVariables = null
    ): array {
        $accumulatedResults = [];
        foreach ($this->executePaginated($statement, $bindingVariables) as $pagedResults) {
            $accumulatedResults = array_merge($accumulatedResults, $pagedResults);
        }
        return $accumulatedResults;
    }

    public function executePaginated(
        string $statement,
        ?array $bindingVariables = null
    ): Generator {
        $statementResult = $this->submit(
            $statement,
            $bindingVariables
        );
        if ($statementResult->getOngoing()) {
            try {
                $this->cancel($statementResult->getHandle());
            } finally {
                throw new OngoingException('Snowflake SQL Statement wasn\'t immediately returned.');
            }
        }
        try {
            yield $statementResult->getCastedRecords();
            // start from pageIndex 1, because page with index 0 was already fetched
            for ($pageIndex = 1; $pageIndex < $statementResult->getPageCount(); $pageIndex++) {
                $fetchResult = $this->fetch(
                    $statementResult->getHandle(),
                    $pageIndex,
                    $statementResult->getResultSetMetaData()
                );
                if ($fetchResult->getOngoing()) {
                    $this->cancel($statementResult->getHandle());
                    throw new OngoingException('Snowflake SQL Statement wasn\'t immediately returned.');
                }
                yield $fetchResult->getCastedRecords();
            }
        } catch (\Throwable $throwable) {
            try {
                $this->cancel($statementResult->getHandle());
            } finally {
                throw $throwable;
            }
        }
    }
}
