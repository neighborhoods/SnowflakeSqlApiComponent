<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSetInterface;

interface FactoryInterface
{
    public function create(): ResultSetInterface;
}
