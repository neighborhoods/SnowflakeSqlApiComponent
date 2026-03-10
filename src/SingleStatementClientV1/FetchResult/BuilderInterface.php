<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResultInterface;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaDataInterface;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSetInterface;

interface BuilderInterface
{
    public function build(): FetchResultInterface;

    public function setClientV1ResultSet(ResultSetInterface $resultSet): BuilderInterface;

    public function setClientV1ResultSetResultSetMetaData(
        ResultSetMetaDataInterface $resultSetMetaData
    ): BuilderInterface;
}
