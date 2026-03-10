<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
