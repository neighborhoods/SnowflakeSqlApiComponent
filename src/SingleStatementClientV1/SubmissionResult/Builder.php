<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\Factory;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResultInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use ResultSet\AwareTrait;
    use ResultSet\DataCaster\Factory\AwareTrait;

    public function build(): SubmissionResultInterface
    {
        $resultSet = $this->getClientV1ResultSet();
        $SubmissionResult = $this->getSingleStatementClientV1SubmissionResultFactory()->create();

        $SubmissionResult->setHandle($resultSet->getStatementHandle());
        $SubmissionResult->setOngoing($resultSet->getHttpStatusCode() === 202);
        if (!$SubmissionResult->getOngoing()) {
            $SubmissionResult->setResultSetMetaData($resultSet->getResultSetMetaData());
            $SubmissionResult->setPageCount(count($resultSet->getResultSetMetaData()->getPartitionInfo()));
            $SubmissionResult->setCastedRecords(
                $this->getClientV1ResultSetDataCasterFactory()
                    ->create()
                    ->setRows($resultSet->getData())
                    ->setClientV1ResultSetResultSetMetaDataRowTypeMap($resultSet->getResultSetMetaData()->getRowType())
                    ->cast()
            );
        }

        return $SubmissionResult;
    }
}
