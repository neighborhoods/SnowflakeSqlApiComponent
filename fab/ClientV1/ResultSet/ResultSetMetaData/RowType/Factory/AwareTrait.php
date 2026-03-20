<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowTypeFactory;

    public function setClientV1ResultSetResultSetMetaDataRowTypeFactory(FactoryInterface $RowTypeFactory): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowTypeFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeFactory is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowTypeFactory = $RowTypeFactory;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowTypeFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeFactory is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowTypeFactory;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowTypeFactory(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowTypeFactory);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowTypeFactory(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeFactory()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeFactory is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowTypeFactory);

        return $this;
    }
}
