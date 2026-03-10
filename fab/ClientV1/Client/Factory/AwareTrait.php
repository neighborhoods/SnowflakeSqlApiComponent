<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Client\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Client\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ClientFactory;

    public function setClientV1ClientFactory(FactoryInterface $ClientFactory): self
    {
        if ($this->hasClientV1ClientFactory()) {
            throw new LogicException('ClientV1ClientFactory is already set.');
        }
        $this->ClientV1ClientFactory = $ClientFactory;

        return $this;
    }

    protected function getClientV1ClientFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ClientFactory()) {
            throw new LogicException('ClientV1ClientFactory is not set.');
        }

        return $this->ClientV1ClientFactory;
    }

    protected function hasClientV1ClientFactory(): bool
    {
        return isset($this->ClientV1ClientFactory);
    }

    protected function unsetClientV1ClientFactory(): self
    {
        if (!$this->hasClientV1ClientFactory()) {
            throw new LogicException('ClientV1ClientFactory is not set.');
        }
        unset($this->ClientV1ClientFactory);

        return $this;
    }
}
