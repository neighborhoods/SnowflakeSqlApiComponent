<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfoInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataPartitionInfo;

    public function setClientV1ResultSetResultSetMetaDataPartitionInfo(PartitionInfoInterface $PartitionInfo): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataPartitionInfo()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfo is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataPartitionInfo = $PartitionInfo;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataPartitionInfo(): PartitionInfoInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfo()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfo is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataPartitionInfo;
    }

    protected function hasClientV1ResultSetResultSetMetaDataPartitionInfo(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataPartitionInfo);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataPartitionInfo(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataPartitionInfo()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataPartitionInfo is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataPartitionInfo);

        return $this;
    }
}
