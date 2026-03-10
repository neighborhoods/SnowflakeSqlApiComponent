<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequestInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): StatementsRequestInterface
    {
        return clone $this->getClientV1StatementsRequest();
    }
}
