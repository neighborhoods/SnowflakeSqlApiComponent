<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType;

use ArrayAccess;
use Countable;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowTypeInterface;
use SeekableIterator;
use Serializable;

interface MapInterface extends SeekableIterator, ArrayAccess, Serializable, Countable
{
    /** @param RowTypeInterface ...$RowTypes */
    public function __construct(array $RowTypes = [], int $flags = 0);

    public function offsetGet($index): RowTypeInterface;

    /** @param RowTypeInterface $RowType */
    public function offsetSet($index, $RowType): void;

    /** @param RowTypeInterface $RowType */
    public function append($RowType): void;

    public function current(): RowTypeInterface;

    public function getArrayCopy(): MapInterface;

    public function toArray(): array;

    /** @param RowTypeInterface ...$RowTypes */
    public function hydrate(array $RowTypes): MapInterface;
}
