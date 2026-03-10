<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResult;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSetInterface;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\SubmissionResultInterface;

interface BuilderInterface
{
    public function build(): SubmissionResultInterface;

    public function setClientV1ResultSet(ResultSetInterface $resultSet): BuilderInterface;
}
