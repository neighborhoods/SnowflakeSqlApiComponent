<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetStatsBuilderFactory;

    public function setClientV1ResultSetStatsBuilderFactory(FactoryInterface $StatsBuilderFactory): self
    {
        if ($this->hasClientV1ResultSetStatsBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetStatsBuilderFactory is already set.');
        }
        $this->ClientV1ResultSetStatsBuilderFactory = $StatsBuilderFactory;

        return $this;
    }

    protected function getClientV1ResultSetStatsBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetStatsBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetStatsBuilderFactory is not set.');
        }

        return $this->ClientV1ResultSetStatsBuilderFactory;
    }

    protected function hasClientV1ResultSetStatsBuilderFactory(): bool
    {
        return isset($this->ClientV1ResultSetStatsBuilderFactory);
    }

    protected function unsetClientV1ResultSetStatsBuilderFactory(): self
    {
        if (!$this->hasClientV1ResultSetStatsBuilderFactory()) {
            throw new LogicException('ClientV1ResultSetStatsBuilderFactory is not set.');
        }
        unset($this->ClientV1ResultSetStatsBuilderFactory);

        return $this;
    }
}
