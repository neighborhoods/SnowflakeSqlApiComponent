<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
