<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body;

use LogicException;

class BindVariable implements BindVariableInterface
{
    /** @var string */
    private $type;

    /** @var string */
    private $value;

    public function getType(): string
    {
        if ($this->type === null) {
            throw new LogicException('type has not been set');
        }

        return $this->type;
    }

    public function setType(string $type): BindVariableInterface
    {
        if ($this->type !== null) {
            throw new LogicException('type has already been set');
        }

        $this->type = $type;
        return $this;
    }

    public function hasType(): bool
    {
        return $this->type !== null;
    }


    public function getValue(): string
    {
        if ($this->value === null) {
            throw new LogicException('value has not been set');
        }

        return $this->value;
    }

    public function setValue(string $value): BindVariableInterface
    {
        if ($this->value !== null) {
            throw new LogicException('value has already been set');
        }

        $this->value = $value;
        return $this;
    }

    public function hasValue(): bool
    {
        return $this->value !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
