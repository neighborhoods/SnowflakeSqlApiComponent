<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetStatsBuilder;

    public function setClientV1ResultSetStatsBuilder(BuilderInterface $StatsBuilder): self
    {
        if ($this->hasClientV1ResultSetStatsBuilder()) {
            throw new LogicException('ClientV1ResultSetStatsBuilder is already set.');
        }
        $this->ClientV1ResultSetStatsBuilder = $StatsBuilder;

        return $this;
    }

    protected function getClientV1ResultSetStatsBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1ResultSetStatsBuilder()) {
            throw new LogicException('ClientV1ResultSetStatsBuilder is not set.');
        }

        return $this->ClientV1ResultSetStatsBuilder;
    }

    protected function hasClientV1ResultSetStatsBuilder(): bool
    {
        return isset($this->ClientV1ResultSetStatsBuilder);
    }

    protected function unsetClientV1ResultSetStatsBuilder(): self
    {
        if (!$this->hasClientV1ResultSetStatsBuilder()) {
            throw new LogicException('ClientV1ResultSetStatsBuilder is not set.');
        }
        unset($this->ClientV1ResultSetStatsBuilder);

        return $this;
    }
}
