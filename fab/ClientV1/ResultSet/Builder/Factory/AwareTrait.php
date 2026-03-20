<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetBuilderFactory;

    public function setClientV1ResultSetBuilderFactory(FactoryInterface $ResultSetBuilderFactory): self
    {
        if ($this->hasClientV1ResultSetBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetBuilderFactory is already set.');
        }
        $this->ClientV1ResultSetBuilderFactory = $ResultSetBuilderFactory;

        return $this;
    }

    protected function getClientV1ResultSetBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetBuilderFactory is not set.');
        }

        return $this->ClientV1ResultSetBuilderFactory;
    }

    protected function hasClientV1ResultSetBuilderFactory(): bool
    {
        return isset($this->ClientV1ResultSetBuilderFactory);
    }

    protected function unsetClientV1ResultSetBuilderFactory(): self
    {
        if (!$this->hasClientV1ResultSetBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetBuilderFactory is not set.');
        }
        unset($this->ClientV1ResultSetBuilderFactory);

        return $this;
    }
}
