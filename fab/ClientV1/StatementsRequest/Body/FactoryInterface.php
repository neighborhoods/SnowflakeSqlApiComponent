<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\BodyInterface;

interface FactoryInterface
{
    public function create(): BodyInterface;
}
