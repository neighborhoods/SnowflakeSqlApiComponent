<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1VendorPsrRequestBuilderFactory;

    public function setClientV1VendorPsrRequestBuilderFactory(FactoryInterface $BuilderFactory): self
    {
        if ($this->hasClientV1VendorPsrRequestBuilderFactory()) {
            throw new LogicException('ClientV1VendorPsrRequestBuilderFactory is already set.');
        }
        $this->ClientV1VendorPsrRequestBuilderFactory = $BuilderFactory;

        return $this;
    }

    protected function getClientV1VendorPsrRequestBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1VendorPsrRequestBuilderFactory()) {
            throw new LogicException('ClientV1VendorPsrRequestBuilderFactory is not set.');
        }

        return $this->ClientV1VendorPsrRequestBuilderFactory;
    }

    protected function hasClientV1VendorPsrRequestBuilderFactory(): bool
    {
        return isset($this->ClientV1VendorPsrRequestBuilderFactory);
    }

    protected function unsetClientV1VendorPsrRequestBuilderFactory(): self
    {
        if (!$this->hasClientV1VendorPsrRequestBuilderFactory()) {
            throw new LogicException('ClientV1VendorPsrRequestBuilderFactory is not set.');
        }
        unset($this->ClientV1VendorPsrRequestBuilderFactory);

        return $this;
    }
}
