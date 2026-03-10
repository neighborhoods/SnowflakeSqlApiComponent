<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\FactoryInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1SubmissionResultFactory;

    public function setSingleStatementClientV1SubmissionResultFactory(FactoryInterface $SubmissionResultFactory): self
    {
        if ($this->hasSingleStatementClientV1SubmissionResultFactory()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultFactory is already set.');
        }
        $this->SingleStatementClientV1SubmissionResultFactory = $SubmissionResultFactory;

        return $this;
    }

    protected function getSingleStatementClientV1SubmissionResultFactory(): FactoryInterface
    {
        if (!$this->hasSingleStatementClientV1SubmissionResultFactory()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultFactory is not set.');
        }

        return $this->SingleStatementClientV1SubmissionResultFactory;
    }

    protected function hasSingleStatementClientV1SubmissionResultFactory(): bool
    {
        return isset($this->SingleStatementClientV1SubmissionResultFactory);
    }

    protected function unsetSingleStatementClientV1SubmissionResultFactory(): self
    {
        if (!$this->hasSingleStatementClientV1SubmissionResultFactory()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultFactory is not set.');
        }
        unset($this->SingleStatementClientV1SubmissionResultFactory);

        return $this;
    }
}
