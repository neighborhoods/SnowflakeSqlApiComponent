<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo;

use ArrayIterator;
use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfoInterface;

class Map extends ArrayIterator implements MapInterface
{
    /** @param PartitionInfoInterface ...$PartitionInfos */
    public function __construct(array $PartitionInfos = [], int $flags = 0)
    {
        if ($this->count() !== 0) {
            throw new LogicException('Map is not empty.');
        }

        if (!empty($PartitionInfos)) {
            $this->assertValidArrayType(...array_values($PartitionInfos));
        }

        parent::__construct($PartitionInfos, $flags);
    }

    public function offsetGet($index): PartitionInfoInterface
    {
        return $this->assertValidArrayItemType(parent::offsetGet($index));
    }

    /** @param PartitionInfoInterface $PartitionInfo */
    public function offsetSet($index, $PartitionInfo): void
    {
        parent::offsetSet($index, $this->assertValidArrayItemType($PartitionInfo));
    }

    /** @param PartitionInfoInterface $PartitionInfo */
    public function append($PartitionInfo): void
    {
        $this->assertValidArrayItemType($PartitionInfo);
        parent::append($PartitionInfo);
    }

    public function current(): PartitionInfoInterface
    {
        return parent::current();
    }

    protected function assertValidArrayItemType(PartitionInfoInterface $PartitionInfo)
    {
        return $PartitionInfo;
    }

    protected function assertValidArrayType(
        /** @noinspection PhpUnusedParameterInspection */
        PartitionInfoInterface ...$PartitionInfos
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

    /** @param PartitionInfoInterface ...$PartitionInfos */
    public function hydrate(array $PartitionInfos): MapInterface
    {
        $this->__construct($PartitionInfos);

        return $this;
    }
}
