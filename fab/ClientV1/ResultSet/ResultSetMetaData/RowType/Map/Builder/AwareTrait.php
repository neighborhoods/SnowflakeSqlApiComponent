<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder;

    public function setClientV1ResultSetResultSetMetaDataRowTypeMapBuilder(BuilderInterface $RowTypeMapBuilder): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder = $RowTypeMapBuilder;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowTypeMapBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilder(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowTypeMapBuilder(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilder);

        return $this;
    }
}
