<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\Client;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\ClientInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): ClientInterface
    {
        return clone $this->getClientV1VendorGuzzleHttpClient();
    }
}
