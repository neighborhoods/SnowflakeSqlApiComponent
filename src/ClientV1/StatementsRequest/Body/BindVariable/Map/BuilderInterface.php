<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\MapInterface;

interface BuilderInterface
{
    public function build(): MapInterface;

    public function setValues(array $values): BuilderInterface;
}
