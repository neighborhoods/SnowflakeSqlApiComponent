<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\BuilderInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1FetchResultBuilder;

    public function setSingleStatementClientV1FetchResultBuilder(BuilderInterface $FetchResultBuilder): self
    {
        if ($this->hasSingleStatementClientV1FetchResultBuilder()) {
            throw new LogicException('SingleStatementClientV1FetchResultBuilder is already set.');
        }
        $this->SingleStatementClientV1FetchResultBuilder = $FetchResultBuilder;

        return $this;
    }

    protected function getSingleStatementClientV1FetchResultBuilder(): BuilderInterface
    {
        if (!$this->hasSingleStatementClientV1FetchResultBuilder()) {
            throw new LogicException('SingleStatementClientV1FetchResultBuilder is not set.');
        }

        return $this->SingleStatementClientV1FetchResultBuilder;
    }

    protected function hasSingleStatementClientV1FetchResultBuilder(): bool
    {
        return isset($this->SingleStatementClientV1FetchResultBuilder);
    }

    protected function unsetSingleStatementClientV1FetchResultBuilder(): self
    {
        if (!$this->hasSingleStatementClientV1FetchResultBuilder()) {
            throw new LogicException('SingleStatementClientV1FetchResultBuilder is not set.');
        }
        unset($this->SingleStatementClientV1FetchResultBuilder);

        return $this;
    }
}
