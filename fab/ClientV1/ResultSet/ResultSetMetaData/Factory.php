<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaDataInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): ResultSetMetaDataInterface
    {
        return clone $this->getClientV1ResultSetResultSetMetaData();
    }
}
