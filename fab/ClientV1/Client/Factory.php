<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Client;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ClientInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): ClientInterface
    {
        return clone $this->getClientV1Client();
    }
}
