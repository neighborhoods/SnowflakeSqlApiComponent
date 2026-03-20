<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\Builder\FactoryInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1SubmissionResultBuilderFactory;

    public function setSingleStatementClientV1SubmissionResultBuilderFactory(FactoryInterface $SubmissionResultBuilderFactory): self
    {
        if ($this->hasSingleStatementClientV1SubmissionResultBuilderFactory()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultBuilderFactory is already set.');
        }
        $this->SingleStatementClientV1SubmissionResultBuilderFactory = $SubmissionResultBuilderFactory;

        return $this;
    }

    protected function getSingleStatementClientV1SubmissionResultBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSingleStatementClientV1SubmissionResultBuilderFactory()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultBuilderFactory is not set.');
        }

        return $this->SingleStatementClientV1SubmissionResultBuilderFactory;
    }

    protected function hasSingleStatementClientV1SubmissionResultBuilderFactory(): bool
    {
        return isset($this->SingleStatementClientV1SubmissionResultBuilderFactory);
    }

    protected function unsetSingleStatementClientV1SubmissionResultBuilderFactory(): self
    {
        if (!$this->hasSingleStatementClientV1SubmissionResultBuilderFactory()) {
            throw new LogicException('SingleStatementClientV1SubmissionResultBuilderFactory is not set.');
        }
        unset($this->SingleStatementClientV1SubmissionResultBuilderFactory);

        return $this;
    }
}
