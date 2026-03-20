<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResultInterface;

interface FactoryInterface
{
    public function create(): SubmissionResultInterface;
}
