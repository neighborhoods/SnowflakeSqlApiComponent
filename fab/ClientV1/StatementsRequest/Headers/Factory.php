<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Headers;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\HeadersInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): HeadersInterface
    {
        return clone $this->getClientV1StatementsRequestHeaders();
    }
}
