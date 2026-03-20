<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;

use ArrayAccess;
use Countable;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariableInterface;
use SeekableIterator;
use Serializable;

interface MapInterface extends SeekableIterator, ArrayAccess, Serializable, Countable
{
    /** @param BindVariableInterface ...$BindVariables */
    public function __construct(array $BindVariables = [], int $flags = 0);

    public function offsetGet($index): BindVariableInterface;

    /** @param BindVariableInterface $BindVariable */
    public function offsetSet($index, $BindVariable): void;

    /** @param BindVariableInterface $BindVariable */
    public function append($BindVariable): void;

    public function current(): BindVariableInterface;

    public function getArrayCopy(): MapInterface;

    public function toArray(): array;

    /** @param BindVariableInterface ...$BindVariables */
    public function hydrate(array $BindVariables): MapInterface;
}
