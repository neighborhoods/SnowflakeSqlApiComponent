<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowTypeInterface;

interface BuilderInterface
{
    public function build(): RowTypeInterface;

    public function setRecord(array $record): BuilderInterface;
}
