<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\Client\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\Client\FactoryInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1ClientFactory;

    public function setSingleStatementClientV1ClientFactory(FactoryInterface $ClientFactory): self
    {
        if ($this->hasSingleStatementClientV1ClientFactory()) {
            throw new LogicException('SingleStatementClientV1ClientFactory is already set.');
        }
        $this->SingleStatementClientV1ClientFactory = $ClientFactory;

        return $this;
    }

    protected function getSingleStatementClientV1ClientFactory(): FactoryInterface
    {
        if (!$this->hasSingleStatementClientV1ClientFactory()) {
            throw new LogicException('SingleStatementClientV1ClientFactory is not set.');
        }

        return $this->SingleStatementClientV1ClientFactory;
    }

    protected function hasSingleStatementClientV1ClientFactory(): bool
    {
        return isset($this->SingleStatementClientV1ClientFactory);
    }

    protected function unsetSingleStatementClientV1ClientFactory(): self
    {
        if (!$this->hasSingleStatementClientV1ClientFactory()) {
            throw new LogicException('SingleStatementClientV1ClientFactory is not set.');
        }
        unset($this->SingleStatementClientV1ClientFactory);

        return $this;
    }
}
