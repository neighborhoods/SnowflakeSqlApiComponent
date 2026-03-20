<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariableInterface;

interface BuilderInterface
{
    public function build(): BindVariableInterface;

    /**
     * @param mixed $value
     */
    public function setValue($value): BuilderInterface;
}
