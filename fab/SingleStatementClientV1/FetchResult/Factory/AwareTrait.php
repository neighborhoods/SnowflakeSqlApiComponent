<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\FactoryInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1FetchResultFactory;

    public function setSingleStatementClientV1FetchResultFactory(FactoryInterface $FetchResultFactory): self
    {
        if ($this->hasSingleStatementClientV1FetchResultFactory()) {
            throw new LogicException('SingleStatementClientV1FetchResultFactory is already set.');
        }
        $this->SingleStatementClientV1FetchResultFactory = $FetchResultFactory;

        return $this;
    }

    protected function getSingleStatementClientV1FetchResultFactory(): FactoryInterface
    {
        if (!$this->hasSingleStatementClientV1FetchResultFactory()) {
            throw new LogicException('SingleStatementClientV1FetchResultFactory is not set.');
        }

        return $this->SingleStatementClientV1FetchResultFactory;
    }

    protected function hasSingleStatementClientV1FetchResultFactory(): bool
    {
        return isset($this->SingleStatementClientV1FetchResultFactory);
    }

    protected function unsetSingleStatementClientV1FetchResultFactory(): self
    {
        if (!$this->hasSingleStatementClientV1FetchResultFactory()) {
            throw new LogicException('SingleStatementClientV1FetchResultFactory is not set.');
        }
        unset($this->SingleStatementClientV1FetchResultFactory);

        return $this;
    }
}
