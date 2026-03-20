<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\MapInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfos;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfoMap(MapInterface $PartitionInfos): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMap()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfos is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfos = $PartitionInfos;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfoMap(): MapInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMap()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfos is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfos;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfoMap(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfos);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfoMap(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfoMap()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfos is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfos);

        return $this;
    }
}
