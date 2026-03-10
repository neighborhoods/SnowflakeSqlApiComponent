<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowTypeInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowType;

    public function setClientV1ResultSetResultSetMetaDataRowType(RowTypeInterface $RowType): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowType()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowType is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowType = $RowType;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowType(): RowTypeInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowType()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowType is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowType;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowType(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowType);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowType(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowType()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowType is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowType);

        return $this;
    }
}
