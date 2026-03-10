<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\BodyInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BodyInterface
    {
        return clone $this->getClientV1StatementsRequestBody();
    }
}
