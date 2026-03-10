<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\StatsInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): StatsInterface
    {
        return clone $this->getClientV1ResultSetStats();
    }
}
