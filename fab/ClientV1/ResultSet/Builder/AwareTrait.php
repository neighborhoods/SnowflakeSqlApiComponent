<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetBuilder;

    public function setClientV1ResultSetBuilder(BuilderInterface $ResultSetBuilder): self
    {
        if ($this->hasClientV1ResultSetBuilder()) {
            throw new LogicException('ClientV1ResultSetBuilder is already set.');
        }
        $this->ClientV1ResultSetBuilder = $ResultSetBuilder;

        return $this;
    }

    protected function getClientV1ResultSetBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1ResultSetBuilder()) {
            throw new LogicException('ClientV1ResultSetBuilder is not set.');
        }

        return $this->ClientV1ResultSetBuilder;
    }

    protected function hasClientV1ResultSetBuilder(): bool
    {
        return isset($this->ClientV1ResultSetBuilder);
    }

    protected function unsetClientV1ResultSetBuilder(): self
    {
        if (!$this->hasClientV1ResultSetBuilder()) {
            throw new LogicException('ClientV1ResultSetBuilder is not set.');
        }
        unset($this->ClientV1ResultSetBuilder);

        return $this;
    }
}
