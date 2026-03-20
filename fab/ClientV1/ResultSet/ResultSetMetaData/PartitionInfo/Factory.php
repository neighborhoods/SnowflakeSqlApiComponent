<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfoInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): PartitionInfoInterface
    {
        return clone $this->getClientV1ResultSetResultSetMetaDataPartitionInfo();
    }
}
