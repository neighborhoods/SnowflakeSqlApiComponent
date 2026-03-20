<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfoFactory;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfoFactory(FactoryInterface $PartitionInfoFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfoFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfoFactory = $PartitionInfoFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfoFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfoFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfoFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfoFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoFactory);

        return $this;
    }
}
