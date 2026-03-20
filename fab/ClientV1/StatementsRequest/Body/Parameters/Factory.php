<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\Parameters;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\ParametersInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): ParametersInterface
    {
        return clone $this->getClientV1StatementsRequestBodyParameters();
    }
}
