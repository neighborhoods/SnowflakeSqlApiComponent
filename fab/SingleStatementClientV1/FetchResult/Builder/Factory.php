<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\FetchResult\BuilderInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getSingleStatementClientV1FetchResultBuilder();
    }
}
