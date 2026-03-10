<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory(FactoryInterface $PartitionInfoMapBuilderFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory = $PartitionInfoMapBuilderFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory);

        return $this;
    }
}
