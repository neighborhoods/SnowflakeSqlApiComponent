<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\Client\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\Client\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1VendorGuzzleHttpClientFactory;

    public function setClientV1VendorGuzzleHttpClientFactory(FactoryInterface $ClientFactory): self
    {
        if ($this->hasClientV1VendorGuzzleHttpClientFactory()) {
            throw new LogicException('ClientV1VendorGuzzleHttpClientFactory is already set.');
        }
        $this->ClientV1VendorGuzzleHttpClientFactory = $ClientFactory;

        return $this;
    }

    protected function getClientV1VendorGuzzleHttpClientFactory(): FactoryInterface
    {
        if (!$this->hasClientV1VendorGuzzleHttpClientFactory()) {
            throw new LogicException('ClientV1VendorGuzzleHttpClientFactory is not set.');
        }

        return $this->ClientV1VendorGuzzleHttpClientFactory;
    }

    protected function hasClientV1VendorGuzzleHttpClientFactory(): bool
    {
        return isset($this->ClientV1VendorGuzzleHttpClientFactory);
    }

    protected function unsetClientV1VendorGuzzleHttpClientFactory(): self
    {
        if (!$this->hasClientV1VendorGuzzleHttpClientFactory()) {
            throw new LogicException('ClientV1VendorGuzzleHttpClientFactory is not set.');
        }
        unset($this->ClientV1VendorGuzzleHttpClientFactory);

        return $this;
    }
}
