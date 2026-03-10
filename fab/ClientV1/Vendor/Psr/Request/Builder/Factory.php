<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\Builder;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request\BuilderInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getClientV1VendorPsrRequestBuilder();
    }
}
