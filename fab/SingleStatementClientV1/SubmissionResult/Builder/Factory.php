<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\BuilderInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getSingleStatementClientV1SubmissionResultBuilder();
    }
}
