<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResultInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1FetchResult;

    public function setSingleStatementClientV1FetchResult(FetchResultInterface $FetchResult): self
    {
        if ($this->hasSingleStatementClientV1FetchResult()) {
            throw new LogicException('SingleStatementClientV1FetchResult is already set.');
        }
        $this->SingleStatementClientV1FetchResult = $FetchResult;

        return $this;
    }

    protected function getSingleStatementClientV1FetchResult(): FetchResultInterface
    {
        if (!$this->hasSingleStatementClientV1FetchResult()) {
            throw new LogicException('SingleStatementClientV1FetchResult is not set.');
        }

        return $this->SingleStatementClientV1FetchResult;
    }

    protected function hasSingleStatementClientV1FetchResult(): bool
    {
        return isset($this->SingleStatementClientV1FetchResult);
    }

    protected function unsetSingleStatementClientV1FetchResult(): self
    {
        if (!$this->hasSingleStatementClientV1FetchResult()) {
            throw new LogicException('SingleStatementClientV1FetchResult is not set.');
        }
        unset($this->SingleStatementClientV1FetchResult);

        return $this;
    }
}
