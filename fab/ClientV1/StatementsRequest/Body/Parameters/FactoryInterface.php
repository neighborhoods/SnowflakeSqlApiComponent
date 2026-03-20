<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\Parameters;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\ParametersInterface;

interface FactoryInterface
{
    public function create(): ParametersInterface;
}
