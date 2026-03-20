<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\Client;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\GuzzleHttp\ClientInterface;

trait AwareTrait
{
    protected $ClientV1VendorGuzzleHttpClient;

    public function setClientV1VendorGuzzleHttpClient(ClientInterface $Client): self
    {
        if ($this->hasClientV1VendorGuzzleHttpClient()) {
            throw new LogicException('ClientV1VendorGuzzleHttpClient is already set.');
        }
        $this->ClientV1VendorGuzzleHttpClient = $Client;

        return $this;
    }

    protected function getClientV1VendorGuzzleHttpClient(): ClientInterface
    {
        if (!$this->hasClientV1VendorGuzzleHttpClient()) {
            throw new LogicException('ClientV1VendorGuzzleHttpClient is not set.');
        }

        return $this->ClientV1VendorGuzzleHttpClient;
    }

    protected function hasClientV1VendorGuzzleHttpClient(): bool
    {
        return isset($this->ClientV1VendorGuzzleHttpClient);
    }

    protected function unsetClientV1VendorGuzzleHttpClient(): self
    {
        if (!$this->hasClientV1VendorGuzzleHttpClient()) {
            throw new LogicException('ClientV1VendorGuzzleHttpClient is not set.');
        }
        unset($this->ClientV1VendorGuzzleHttpClient);

        return $this;
    }
}
