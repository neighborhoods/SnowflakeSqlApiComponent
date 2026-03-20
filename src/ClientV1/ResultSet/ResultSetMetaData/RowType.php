<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

use LogicException;

class RowType implements RowTypeInterface
{
    /** @var string */
    private $name;

    /** @var string */
    private $type;

    /** @var int */
    private $length;

    /** @var int */
    private $precision;

    /** @var int */
    private $scale;

    /** @var bool */
    private $nullable;

    public function getName(): string
    {
        if ($this->name === null) {
            throw new LogicException('name has not been set');
        }

        return $this->name;
    }

    public function setName(string $name): RowTypeInterface
    {
        if ($this->name !== null) {
            throw new LogicException('name has already been set');
        }

        $this->name = $name;
        return $this;
    }

    public function hasName(): bool
    {
        return $this->name !== null;
    }


    public function getType(): string
    {
        if ($this->type === null) {
            throw new LogicException('type has not been set');
        }

        return $this->type;
    }

    public function setType(string $type): RowTypeInterface
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


    public function getLength(): int
    {
        if ($this->length === null) {
            throw new LogicException('length has not been set');
        }

        return $this->length;
    }

    public function setLength(int $length): RowTypeInterface
    {
        if ($this->length !== null) {
            throw new LogicException('length has already been set');
        }

        $this->length = $length;
        return $this;
    }

    public function hasLength(): bool
    {
        return $this->length !== null;
    }


    public function getPrecision(): int
    {
        if ($this->precision === null) {
            throw new LogicException('precision has not been set');
        }

        return $this->precision;
    }

    public function setPrecision(int $precision): RowTypeInterface
    {
        if ($this->precision !== null) {
            throw new LogicException('precision has already been set');
        }

        $this->precision = $precision;
        return $this;
    }

    public function hasPrecision(): bool
    {
        return $this->precision !== null;
    }


    public function getScale(): int
    {
        if ($this->scale === null) {
            throw new LogicException('scale has not been set');
        }

        return $this->scale;
    }

    public function setScale(int $scale): RowTypeInterface
    {
        if ($this->scale !== null) {
            throw new LogicException('scale has already been set');
        }

        $this->scale = $scale;
        return $this;
    }

    public function hasScale(): bool
    {
        return $this->scale !== null;
    }


    public function getNullable(): bool
    {
        if ($this->nullable === null) {
            throw new LogicException('nullable has not been set');
        }

        return $this->nullable;
    }

    public function setNullable(bool $nullable): RowTypeInterface
    {
        if ($this->nullable !== null) {
            throw new LogicException('nullable has already been set');
        }

        $this->nullable = $nullable;
        return $this;
    }

    public function hasNullable(): bool
    {
        return $this->nullable !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
