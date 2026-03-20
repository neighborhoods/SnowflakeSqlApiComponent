<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\Client;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\ClientInterface;

interface FactoryInterface
{
    public function create(): ClientInterface;
}
