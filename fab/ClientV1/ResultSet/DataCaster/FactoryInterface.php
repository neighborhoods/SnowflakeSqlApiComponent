<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCaster;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCasterInterface;

interface FactoryInterface
{
    public function create(): DataCasterInterface;
}
