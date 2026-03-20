<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Headers;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\HeadersInterface;

interface FactoryInterface
{
    public function create(): HeadersInterface;
}
