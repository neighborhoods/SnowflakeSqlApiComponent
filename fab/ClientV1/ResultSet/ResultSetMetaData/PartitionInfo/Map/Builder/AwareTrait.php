<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder(BuilderInterface $PartitionInfoMapBuilder): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder = $PartitionInfoMapBuilder;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilder);

        return $this;
    }
}
