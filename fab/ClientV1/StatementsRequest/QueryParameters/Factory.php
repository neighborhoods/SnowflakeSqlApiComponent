<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParameters;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParametersInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): QueryParametersInterface
    {
        return clone $this->getClientV1StatementsRequestQueryParameters();
    }
}
