<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1VendorPsrRequestBuilder;

    public function setClientV1VendorPsrRequestBuilder(BuilderInterface $Builder): self
    {
        if ($this->hasClientV1VendorPsrRequestBuilder()) {
            throw new LogicException('ClientV1VendorPsrRequestBuilder is already set.');
        }
        $this->ClientV1VendorPsrRequestBuilder = $Builder;

        return $this;
    }

    protected function getClientV1VendorPsrRequestBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1VendorPsrRequestBuilder()) {
            throw new LogicException('ClientV1VendorPsrRequestBuilder is not set.');
        }

        return $this->ClientV1VendorPsrRequestBuilder;
    }

    protected function hasClientV1VendorPsrRequestBuilder(): bool
    {
        return isset($this->ClientV1VendorPsrRequestBuilder);
    }

    protected function unsetClientV1VendorPsrRequestBuilder(): self
    {
        if (!$this->hasClientV1VendorPsrRequestBuilder()) {
            throw new LogicException('ClientV1VendorPsrRequestBuilder is not set.');
        }
        unset($this->ClientV1VendorPsrRequestBuilder);

        return $this;
    }
}
