<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\StatsInterface;

interface BuilderInterface
{
    public function build(): StatsInterface;

    public function setRecord(array $record): BuilderInterface;
}
