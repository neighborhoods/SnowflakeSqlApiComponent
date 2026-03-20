<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaDataInterface;

interface BuilderInterface
{
    public function build(): ResultSetMetaDataInterface;

    public function setRecord(array $record): BuilderInterface;
}
