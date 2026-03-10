<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\Client;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\ClientInterface;

interface FactoryInterface
{
    public function create(): ClientInterface;
}
