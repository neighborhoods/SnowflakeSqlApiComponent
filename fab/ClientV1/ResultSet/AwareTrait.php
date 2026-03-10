<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSetInterface;

trait AwareTrait
{
    protected $ClientV1ResultSet;

    public function setClientV1ResultSet(ResultSetInterface $ResultSet): self
    {
        if ($this->hasClientV1ResultSet()) {
            throw new LogicException('ClientV1ResultSet is already set.');
        }
        $this->ClientV1ResultSet = $ResultSet;

        return $this;
    }

    protected function getClientV1ResultSet(): ResultSetInterface
    {
        if (!$this->hasClientV1ResultSet()) {
            throw new LogicException('ClientV1ResultSet is not set.');
        }

        return $this->ClientV1ResultSet;
    }

    protected function hasClientV1ResultSet(): bool
    {
        return isset($this->ClientV1ResultSet);
    }

    protected function unsetClientV1ResultSet(): self
    {
        if (!$this->hasClientV1ResultSet()) {
            throw new LogicException('ClientV1ResultSet is not set.');
        }
        unset($this->ClientV1ResultSet);

        return $this;
    }
}
