<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory;

    public function setClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory(FactoryInterface $RowTypeBuilderFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory = $RowTypeBuilderFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory);

        return $this;
    }
}
