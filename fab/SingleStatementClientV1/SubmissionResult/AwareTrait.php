<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResultInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1SubmissionResult;

    public function setSingleStatementClientV1SubmissionResult(SubmissionResultInterface $SubmissionResult): self
    {
        if ($this->hasSingleStatementClientV1SubmissionResult()) {
            throw new LogicException('SingleStatementClientV1SubmissionResult is already set.');
        }
        $this->SingleStatementClientV1SubmissionResult = $SubmissionResult;

        return $this;
    }

    protected function getSingleStatementClientV1SubmissionResult(): SubmissionResultInterface
    {
        if (!$this->hasSingleStatementClientV1SubmissionResult()) {
            throw new LogicException('SingleStatementClientV1SubmissionResult is not set.');
        }

        return $this->SingleStatementClientV1SubmissionResult;
    }

    protected function hasSingleStatementClientV1SubmissionResult(): bool
    {
        return isset($this->SingleStatementClientV1SubmissionResult);
    }

    protected function unsetSingleStatementClientV1SubmissionResult(): self
    {
        if (!$this->hasSingleStatementClientV1SubmissionResult()) {
            throw new LogicException('SingleStatementClientV1SubmissionResult is not set.');
        }
        unset($this->SingleStatementClientV1SubmissionResult);

        return $this;
    }
}
