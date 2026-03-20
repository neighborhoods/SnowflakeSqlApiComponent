<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;

use ArrayIterator;
use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariableInterface;

class Map extends ArrayIterator implements MapInterface
{
    /** @param BindVariableInterface ...$BindVariables */
    public function __construct(array $BindVariables = [], int $flags = 0)
    {
        if ($this->count() !== 0) {
            throw new LogicException('Map is not empty.');
        }

        if (!empty($BindVariables)) {
            $this->assertValidArrayType(...array_values($BindVariables));
        }

        parent::__construct($BindVariables, $flags);
    }

    public function offsetGet($index): BindVariableInterface
    {
        return $this->assertValidArrayItemType(parent::offsetGet($index));
    }

    /** @param BindVariableInterface $BindVariable */
    public function offsetSet($index, $BindVariable): void
    {
        parent::offsetSet($index, $this->assertValidArrayItemType($BindVariable));
    }

    /** @param BindVariableInterface $BindVariable */
    public function append($BindVariable): void
    {
        $this->assertValidArrayItemType($BindVariable);
        parent::append($BindVariable);
    }

    public function current(): BindVariableInterface
    {
        return parent::current();
    }

    protected function assertValidArrayItemType(BindVariableInterface $BindVariable)
    {
        return $BindVariable;
    }

    protected function assertValidArrayType(
        /** @noinspection PhpUnusedParameterInspection */
        BindVariableInterface ...$BindVariables
    ): MapInterface {
        return $this;
    }

    #[\ReturnTypeWillChange]
    public function getArrayCopy(): MapInterface
    {
        return new self(parent::getArrayCopy(), (int)$this->getFlags());
    }

    public function toArray(): array
    {
        return (array)$this;
    }

    /** @param BindVariableInterface ...$BindVariables */
    public function hydrate(array $BindVariables): MapInterface
    {
        $this->__construct($BindVariables);

        return $this;
    }
}
