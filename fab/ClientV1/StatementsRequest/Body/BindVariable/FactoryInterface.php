<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariableInterface;

interface FactoryInterface
{
    public function create(): BindVariableInterface;
}
