<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\BuilderInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getClientV1ResultSetStatsBuilder();
    }
}
