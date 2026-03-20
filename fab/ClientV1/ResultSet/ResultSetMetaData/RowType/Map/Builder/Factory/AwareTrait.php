<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory;

    public function setClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory(FactoryInterface $RowTypeMapBuilderFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory = $RowTypeMapBuilderFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory);

        return $this;
    }
}
