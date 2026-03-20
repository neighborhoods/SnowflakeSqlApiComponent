<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\Client;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\ClientInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): ClientInterface
    {
        return clone $this->getSingleStatementClientV1Client();
    }
}
