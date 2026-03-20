<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\Builder\FactoryInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1FetchResultBuilderFactory;

    public function setSingleStatementClientV1FetchResultBuilderFactory(FactoryInterface $FetchResultBuilderFactory): self
    {
        if ($this->hasSingleStatementClientV1FetchResultBuilderFactory()) {
            throw new LogicException('SingleStatementClientV1FetchResultBuilderFactory is already set.');
        }
        $this->SingleStatementClientV1FetchResultBuilderFactory = $FetchResultBuilderFactory;

        return $this;
    }

    protected function getSingleStatementClientV1FetchResultBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSingleStatementClientV1FetchResultBuilderFactory()) {
            throw new LogicException('SingleStatementClientV1FetchResultBuilderFactory is not set.');
        }

        return $this->SingleStatementClientV1FetchResultBuilderFactory;
    }

    protected function hasSingleStatementClientV1FetchResultBuilderFactory(): bool
    {
        return isset($this->SingleStatementClientV1FetchResultBuilderFactory);
    }

    protected function unsetSingleStatementClientV1FetchResultBuilderFactory(): self
    {
        if (!$this->hasSingleStatementClientV1FetchResultBuilderFactory()) {
            throw new LogicException('SingleStatementClientV1FetchResultBuilderFactory is not set.');
        }
        unset($this->SingleStatementClientV1FetchResultBuilderFactory);

        return $this;
    }
}
