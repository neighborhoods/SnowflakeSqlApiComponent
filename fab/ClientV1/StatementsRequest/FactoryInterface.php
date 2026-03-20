<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequestInterface;

interface FactoryInterface
{
    public function create(): StatementsRequestInterface;
}
