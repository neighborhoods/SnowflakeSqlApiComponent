<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaDataInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetResultSetMetaData;

    public function setClientV1ResultSetResultSetMetaData(ResultSetMetaDataInterface $ResultSetMetaData): self
    {
        if ($this->hasClientV1ResultSetResultSetMetaData()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaData is already set.');
        }
        $this->ClientV1ResultSetResultSetMetaData = $ResultSetMetaData;

        return $this;
    }

    protected function getClientV1ResultSetResultSetMetaData(): ResultSetMetaDataInterface
    {
        if (!$this->hasClientV1ResultSetResultSetMetaData()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaData is not set.');
        }

        return $this->ClientV1ResultSetResultSetMetaData;
    }

    protected function hasClientV1ResultSetResultSetMetaData(): bool
    {
        return isset($this->ClientV1ResultSetResultSetMetaData);
    }

    protected function unsetClientV1ResultSetResultSetMetaData(): self
    {
        if (!$this->hasClientV1ResultSetResultSetMetaData()) {
            throw new LogicException('ClientV1ResultSetResultSetMetaData is not set.');
        }
        unset($this->ClientV1ResultSetResultSetMetaData);

        return $this;
    }
}
