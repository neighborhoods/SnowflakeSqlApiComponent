<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSetInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): ResultSetInterface
    {
        return clone $this->getClientV1ResultSet();
    }
}
