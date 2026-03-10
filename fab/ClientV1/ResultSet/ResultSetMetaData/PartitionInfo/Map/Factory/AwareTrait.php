<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory(FactoryInterface $PartitionInfoMapFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory = $PartitionInfoMapFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory);

        return $this;
    }
}
