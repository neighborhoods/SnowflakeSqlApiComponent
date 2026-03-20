<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataBuilderFactory;

    public function setClientV1ResultSetResultSetMetaDataBuilderFactory(FactoryInterface $ResultSetMetaDataBuilderFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataBuilderFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataBuilderFactory = $ResultSetMetaDataBuilderFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataBuilderFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataBuilderFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataBuilderFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataBuilderFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataBuilderFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataBuilderFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataBuilderFactory);

        return $this;
    }
}
