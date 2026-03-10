<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataFactory;

    public function setClientV1ResultSetResultSetMetaDataFactory(FactoryInterface $ResultSetMetaDataFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataFactory = $ResultSetMetaDataFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataFactory);

        return $this;
    }
}
