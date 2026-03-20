<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResultInterface;

interface FactoryInterface
{
    public function create(): FetchResultInterface;
}
