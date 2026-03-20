<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\MapInterface;

class Builder implements BuilderInterface
{
    use BindVariable\Map\Factory\AwareTrait;
    use BindVariable\Builder\Factory\AwareTrait;

    /** @var array */
    protected $values = null;

    public function build(): MapInterface
    {
        $map = $this->getClientV1StatementsRequestBodyBindVariableMapFactory()->create();
        for ($index = 0; $index < count($this->getValues()); $index++) {
            $builder = $this->getClientV1StatementsRequestBodyBindVariableBuilderFactory()->create();
            $item = $builder->setValue($this->getValues()[$index])->build();
            $map[(string)($index + 1)] = $item;
        }

        return $map;
    }

    protected function getValues(): array
    {
        if ($this->values === null) {
            throw new \LogicException('Builder values has not been set.');
        }

        return $this->values;
    }

    public function setValues(array $values): BuilderInterface
    {
        if ($this->values !== null) {
            throw new \LogicException('Builder values is already set.');
        }

        $this->values = $values;

        return $this;
    }
}
