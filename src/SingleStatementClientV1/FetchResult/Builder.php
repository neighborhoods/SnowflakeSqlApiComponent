<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\Factory;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResultInterface;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use ResultSet\AwareTrait;
    use ResultSet\DataCaster\Factory\AwareTrait;
    use ResultSet\ResultSetMetaData\AwareTrait;

    public function build(): FetchResultInterface
    {
        $resultSet = $this->getClientV1ResultSet();
        $FetchResult = $this->getSingleStatementClientV1FetchResultFactory()->create();

        $FetchResult->setOngoing($resultSet->getHttpStatusCode() === 202);
        if (!$FetchResult->getOngoing()) {
            if ($resultSet->hasResultSetMetaData()) {
                $FetchResult->setResultSetMetaData($resultSet->getResultSetMetaData());
            } else {
                $FetchResult->setResultSetMetaData($this->getClientV1ResultSetResultSetMetaData());
            }
            $FetchResult->setPageCount(count($FetchResult->getResultSetMetaData()->getPartitionInfo()));
            $FetchResult->setCastedRecords(
                $this->getClientV1ResultSetDataCasterFactory()
                    ->create()
                    ->setRows($resultSet->getData())
                    ->setClientV1ResultSetResultSetMetaDataRowTypeMap(
                        $FetchResult->getResultSetMetaData()->getRowType()
                    )
                    ->cast()
            );
        }

        return $FetchResult;
    }
}
