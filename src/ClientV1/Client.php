<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Exception\UnauthorizedException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp;
use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnosticV1\DiagnosedInterface;
use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnosticV1\ThrowableDiagnostic;
use Psr\Http\Message\RequestInterface as PsrRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class Client implements ClientInterface
{
    use JwtTokenGenerator\AwareTrait;
    use ResultSet\Builder\Factory\AwareTrait;
    use StatementsRequest\Headers\Factory\AwareTrait;
    use ThrowableDiagnostic\Builder\Factory\AwareTrait;
    use Vendor\GuzzleHttp\Client\Factory\AwareTrait;
    use Vendor\Psr\Request\Builder\Factory\AwareTrait;

    /** @var string */
    private $jwtToken;

    public function authorizeAndSend(
        StatementsRequestInterface $request
    ): ResultSetInterface {
        if ($this->jwtToken == null) {
            $this->jwtToken = $this->getClientV1JwtTokenGenerator()
                ->generateJWT();
        }
        $headers = $this->getClientV1StatementsRequestHeadersFactory()
            ->create()
            ->setXSnowflakeAuthorizationTokenType('KEYPAIR_JWT')
            ->setAuthorization('Bearer ' . $this->jwtToken);
        $request->setHeaders($headers);
        try {
            return $this->send($request);
        } catch (UnauthorizedException $e) {
            // re-try with fresh token
            $this->jwtToken = $this->getClientV1JwtTokenGenerator()
                ->generateJWT();
            $headers->overrideAuthorization('Bearer ' . $this->jwtToken);
            return $this->send($request);
        }
    }

    private function send(
        StatementsRequestInterface $request
    ): ResultSetInterface {
        $clientV1VendorPsrRequestBuilder = $this->getClientV1VendorPsrRequestBuilderFactory()
            ->create();
        $host = 'https://' . $this->getClientV1JwtTokenGenerator()->getAccount() . '.snowflakecomputing.com';
        if ($request->hasHost()) {
            $host = $request->getHost();
        }
        $clientV1VendorPsrRequestBuilder->setMethod($request->getMethod());
        $uri = $host . $request->getPath();
        if ($request->hasQueryParameters()) {
            $stringifiedQueryParameters = (string)$request->getQueryParameters();
            if (!empty($stringifiedQueryParameters)) {
                $uri .= '?' . $stringifiedQueryParameters;
            }
        }
        $clientV1VendorPsrRequestBuilder->setUri($uri);
        if ($request->hasBody()) {
            $clientV1VendorPsrRequestBuilder->setBody(json_encode($request->getBody(), JSON_THROW_ON_ERROR));
        }
        $clientV1VendorPsrRequestBuilder->setHeaders($request->getHeaders()->toArray());

        $response = $this->makeGuzzleRequest($clientV1VendorPsrRequestBuilder->build());
        $rawResponseBody = json_decode($response->getBody()->getContents(), true);

        $resultSet = $this->getClientV1ResultSetBuilderFactory()
            ->create()
            ->setRecord($rawResponseBody)
            ->build();
        $resultSet->setHttpStatusCode($response->getStatusCode());
        $resultSet->setRequest($request);
        return $resultSet;
    }

    protected function makeGuzzleRequest(PsrRequestInterface $request): ResponseInterface
    {
        $requestCount = 0;
        do {
            $guzzleClient = $this->getClientV1VendorGuzzleHttpClientFactory()->create();
            try {
                $requestCount++;
                $response = $guzzleClient->send($request);
            } catch (Throwable $throwable) {
                try {
                    $this->getThrowableDiagnosticV1ThrowableDiagnosticBuilderFactory()
                        ->create()
                        ->build()
                        ->diagnose($throwable);
                } catch (DiagnosedInterface $diagnosed) {
                    if (!$diagnosed->isTransient()) {
                        throw $diagnosed;
                    }
                    if ($requestCount >= 2) {
                        throw $diagnosed;
                    }
                }
            }
        } while (!isset($response));
        return $response;
    }
}
