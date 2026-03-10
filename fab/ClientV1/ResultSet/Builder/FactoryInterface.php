<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
