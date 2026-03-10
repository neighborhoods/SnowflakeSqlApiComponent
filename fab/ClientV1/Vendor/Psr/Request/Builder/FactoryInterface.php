<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
