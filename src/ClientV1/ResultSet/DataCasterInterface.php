<?php

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

interface DataCasterInterface
{
    public function setClientV1ResultSetResultSetMetaDataRowTypeMap(
        ResultSetMetaData\RowType\MapInterface $rowTypes
    ): DataCasterInterface;
    public function setRows(array $rows): DataCasterInterface;
    public function cast(): array;
}
