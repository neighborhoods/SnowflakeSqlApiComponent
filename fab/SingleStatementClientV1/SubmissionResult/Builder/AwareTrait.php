<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\BuilderInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1SubmissionResultBuilder;

    public function setSingleStatementClientV1SubmissionResultBuilder(BuilderInterface $SubmissionResultBuilder): self
    {
        if ($this->hasSingleStatementClientV1SubmissionResultBuilder()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultBuilder is already set.');
        }
        $this->SingleStatementClientV1SubmissionResultBuilder = $SubmissionResultBuilder;

        return $this;
    }

    protected function getSingleStatementClientV1SubmissionResultBuilder(): BuilderInterface
    {
        if (!$this->hasSingleStatementClientV1SubmissionResultBuilder()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultBuilder is not set.');
        }

        return $this->SingleStatementClientV1SubmissionResultBuilder;
    }

    protected function hasSingleStatementClientV1SubmissionResultBuilder(): bool
    {
        return isset($this->SingleStatementClientV1SubmissionResultBuilder);
    }

    protected function unsetSingleStatementClientV1SubmissionResultBuilder(): self
    {
        if (!$this->hasSingleStatementClientV1SubmissionResultBuilder()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultBuilder is not set.');
        }
        unset($this->SingleStatementClientV1SubmissionResultBuilder);

        return $this;
    }
}
