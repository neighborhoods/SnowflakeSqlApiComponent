<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
