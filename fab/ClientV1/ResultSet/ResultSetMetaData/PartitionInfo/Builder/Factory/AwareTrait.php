<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory(FactoryInterface $PartitionInfoBuilderFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory = $PartitionInfoBuilderFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory);

        return $this;
    }
}
