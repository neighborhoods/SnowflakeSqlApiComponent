<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Client;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ClientInterface;

interface FactoryInterface
{
    public function create(): ClientInterface;
}
