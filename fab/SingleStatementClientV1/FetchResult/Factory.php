<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResultInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): FetchResultInterface
    {
        return clone $this->getSingleStatementClientV1FetchResult();
    }
}
