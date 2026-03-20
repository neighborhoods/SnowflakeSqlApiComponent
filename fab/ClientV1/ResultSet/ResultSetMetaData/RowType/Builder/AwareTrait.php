<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataRowTypeBuilder;

    public function setClientV1ResultSetResultSetMetaDataRowTypeBuilder(BuilderInterface $RowTypeBuilder): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataRowTypeBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeBuilder is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataRowTypeBuilder = $RowTypeBuilder;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataRowTypeBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeBuilder is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataRowTypeBuilder;
    }

    protected function hasClientV1ResultSetResultSetMetaDataRowTypeBuilder(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataRowTypeBuilder);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataRowTypeBuilder(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataRowTypeBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataRowTypeBuilder is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataRowTypeBuilder);

        return $this;
    }
}
