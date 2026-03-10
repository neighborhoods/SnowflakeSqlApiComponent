<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowTypeMapFactory;

    public function setClientV1ResultSetResultSetMetaDataRowTypeMapFactory(FactoryInterface $RowTypeMapFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowTypeMapFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowTypeMapFactory = $RowTypeMapFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowTypeMapFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMapFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowTypeMapFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowTypeMapFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowTypeMapFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowTypeMapFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMapFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowTypeMapFactory);

        return $this;
    }
}
