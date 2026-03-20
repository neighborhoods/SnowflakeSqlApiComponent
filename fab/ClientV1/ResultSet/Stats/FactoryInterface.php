<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\StatsInterface;

interface FactoryInterface
{
    public function create(): StatsInterface;
}
