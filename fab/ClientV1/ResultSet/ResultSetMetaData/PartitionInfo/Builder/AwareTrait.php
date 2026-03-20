<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfoBuilder(BuilderInterface $PartitionInfoBuilder): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder = $PartitionInfoBuilder;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfoBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilder(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfoBuilder(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoBuilder);

        return $this;
    }
}
