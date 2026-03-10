<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowTypeInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): RowTypeInterface
    {
        return clone $this->getClientV1ResultSetResultSetMetaDataRowType();
    }
}
