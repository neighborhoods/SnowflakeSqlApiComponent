<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\StatsInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetStats;

    public function setClientV1ResultSetStats(StatsInterface $Stats): self
    {
        if ($this->hasClientV1ResultSetStats()) {
            throw new LogicException('ClientV1ResultSetStats is already set.');
        }
        $this->ClientV1ResultSetStats = $Stats;

        return $this;
    }

    protected function getClientV1ResultSetStats(): StatsInterface
    {
        if (!$this->hasClientV1ResultSetStats()) {
            throw new LogicException('ClientV1ResultSetStats is not set.');
        }

        return $this->ClientV1ResultSetStats;
    }

    protected function hasClientV1ResultSetStats(): bool
    {
        return isset($this->ClientV1ResultSetStats);
    }

    protected function unsetClientV1ResultSetStats(): self
    {
        if (!$this->hasClientV1ResultSetStats()) {
            throw new LogicException('ClientV1ResultSetStats is not set.');
        }
        unset($this->ClientV1ResultSetStats);

        return $this;
    }
}
