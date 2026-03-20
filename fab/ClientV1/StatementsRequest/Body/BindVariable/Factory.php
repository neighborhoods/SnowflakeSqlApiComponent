<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariableInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BindVariableInterface
    {
        return clone $this->getClientV1StatementsRequestBodyBindVariable();
    }
}
