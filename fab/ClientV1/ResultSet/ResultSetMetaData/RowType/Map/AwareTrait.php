<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\MapInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowTypes;

    public function setClientV1ResultSetResultSetMetaDataRowTypeMap(MapInterface $RowTypes): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowTypeMap()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypes is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowTypes = $RowTypes;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowTypeMap(): MapInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMap()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypes is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowTypes;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowTypeMap(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowTypes);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowTypeMap(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMap()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypes is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowTypes);

        return $this;
    }
}
