<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetFactory;

    public function setClientV1ResultSetFactory(FactoryInterface $ResultSetFactory): self
    {
        if ($this->hasClientV1ResultSetFactory()) {
            throw new LogicException('ClientV1ResultSetFactory is already set.');
        }
        $this->ClientV1ResultSetFactory = $ResultSetFactory;

        return $this;
    }

    protected function getClientV1ResultSetFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetFactory()) {
            throw new LogicException('ClientV1ResultSetFactory is not set.');
        }

        return $this->ClientV1ResultSetFactory;
    }

    protected function hasClientV1ResultSetFactory(): bool
    {
        return isset($this->ClientV1ResultSetFactory);
    }

    protected function unsetClientV1ResultSetFactory(): self
    {
        if (!$this->hasClientV1ResultSetFactory()) {
            throw new LogicException('ClientV1ResultSetFactory is not set.');
        }
        unset($this->ClientV1ResultSetFactory);

        return $this;
    }
}
