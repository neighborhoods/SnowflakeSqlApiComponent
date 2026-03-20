<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSetInterface;

interface BuilderInterface
{
    public function build(): ResultSetInterface;

    public function setRecord(array $record): BuilderInterface;
}
