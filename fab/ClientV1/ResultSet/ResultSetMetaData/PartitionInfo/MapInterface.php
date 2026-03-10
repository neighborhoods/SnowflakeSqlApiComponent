<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo;

use ArrayAccess;
use Countable;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfoInterface;
use SeekableIterator;
use Serializable;

interface MapInterface extends SeekableIterator, ArrayAccess, Serializable, Countable
{
    /** @param PartitionInfoInterface ...$PartitionInfos */
    public function __construct(array $PartitionInfos = [], int $flags = 0);

    public function offsetGet($index): PartitionInfoInterface;

    /** @param PartitionInfoInterface $PartitionInfo */
    public function offsetSet($index, $PartitionInfo): void;

    /** @param PartitionInfoInterface $PartitionInfo */
    public function append($PartitionInfo): void;

    public function current(): PartitionInfoInterface;

    public function getArrayCopy(): MapInterface;

    public function toArray(): array;

    /** @param PartitionInfoInterface ...$PartitionInfos */
    public function hydrate(array $PartitionInfos): MapInterface;
}
