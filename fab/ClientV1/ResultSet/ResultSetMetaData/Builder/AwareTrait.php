<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaDataBuilder;

    public function setClientV1ResultSetResultSetMetaDataBuilder(BuilderInterface $ResultSetMetaDataBuilder): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaDataBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataBuilder is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaDataBuilder = $ResultSetMetaDataBuilder;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaDataBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataBuilder is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaDataBuilder;
    }

    protected function hasClientV1ResultSetResultSetMetaDataBuilder(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaDataBuilder);
    }

    protected function unsetClientV1ResultSetResultSetMetaDataBuilder(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaDataBuilder()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaDataBuilder is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaDataBuilder);

        return $this;
    }
}
