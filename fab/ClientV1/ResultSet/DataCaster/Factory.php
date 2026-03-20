<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCaster;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCasterInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): DataCasterInterface
    {
        return clone $this->getClientV1ResultSetDataCaster();
    }
}
