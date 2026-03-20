<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParameters;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParametersInterface;

interface FactoryInterface
{
    public function create(): QueryParametersInterface;
}
