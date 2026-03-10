<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResultInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): SubmissionResultInterface
    {
        return clone $this->getSingleStatementClientV1SubmissionResult();
    }
}
