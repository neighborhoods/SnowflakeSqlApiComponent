<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType;

use ArrayIterator;
use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowTypeInterface;

class Map extends ArrayIterator implements MapInterface
{
    /** @param RowTypeInterface ...$RowTypes */
    public function __construct(array $RowTypes = [], int $flags = 0)
    {
        if ($this->count() !== 0) {
            throw new LogicException('Map is not empty.');
        }

        if (!empty($RowTypes)) {
            $this->assertValidArrayType(...array_values($RowTypes));
        }

        parent::__construct($RowTypes, $flags);
    }

    public function offsetGet($index): RowTypeInterface
    {
        return $this->assertValidArrayItemType(parent::offsetGet($index));
    }

    /** @param RowTypeInterface $RowType */
    public function offsetSet($index, $RowType): void
    {
        parent::offsetSet($index, $this->assertValidArrayItemType($RowType));
    }

    /** @param RowTypeInterface $RowType */
    public function append($RowType): void
    {
        $this->assertValidArrayItemType($RowType);
        parent::append($RowType);
    }

    public function current(): RowTypeInterface
    {
        return parent::current();
    }

    protected function assertValidArrayItemType(RowTypeInterface $RowType)
    {
        return $RowType;
    }

    protected function assertValidArrayType(
        /** @noinspection PhpUnusedParameterInspection */
        RowTypeInterface ...$RowTypes
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

    /** @param RowTypeInterface ...$RowTypes */
    public function hydrate(array $RowTypes): MapInterface
    {
        $this->__construct($RowTypes);

        return $this;
    }
}
