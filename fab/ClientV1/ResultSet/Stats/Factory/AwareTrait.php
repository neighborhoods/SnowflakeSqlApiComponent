<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetStatsFactory;

    public function setClientV1ResultSetStatsFactory(FactoryInterface $StatsFactory): self
    {
        if ($this->hasClientV1ResultSetStatsFactory()) {
            throw new LogicException('ClientV1ResultSetStatsFactory is already set.');
        }
        $this->ClientV1ResultSetStatsFactory = $StatsFactory;

        return $this;
    }

    protected function getClientV1ResultSetStatsFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetStatsFactory()) {
            throw new LogicException('ClientV1ResultSetStatsFactory is not set.');
        }

        return $this->ClientV1ResultSetStatsFactory;
    }

    protected function hasClientV1ResultSetStatsFactory(): bool
    {
        return isset($this->ClientV1ResultSetStatsFactory);
    }

    protected function unsetClientV1ResultSetStatsFactory(): self
    {
        if (!$this->hasClientV1ResultSetStatsFactory()) {
            throw new LogicException('ClientV1ResultSetStatsFactory is not set.');
        }
        unset($this->ClientV1ResultSetStatsFactory);

        return $this;
    }
}
