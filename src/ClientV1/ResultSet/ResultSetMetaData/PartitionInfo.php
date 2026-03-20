<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

use LogicException;

class PartitionInfo implements PartitionInfoInterface
{
    /** @var int */
    private $rowCount;

    /** @var int */
    private $uncompressedSize;

    /** @var int */
    private $compressedSize;

    public function getRowCount(): int
    {
        if ($this->rowCount === null) {
            throw new LogicException('rowCount has not been set');
        }

        return $this->rowCount;
    }

    public function setRowCount(int $rowCount): PartitionInfoInterface
    {
        if ($this->rowCount !== null) {
            throw new LogicException('rowCount has already been set');
        }

        $this->rowCount = $rowCount;
        return $this;
    }

    public function hasRowCount(): bool
    {
        return $this->rowCount !== null;
    }


    public function getUncompressedSize(): int
    {
        if ($this->uncompressedSize === null) {
            throw new LogicException('uncompressedSize has not been set');
        }

        return $this->uncompressedSize;
    }

    public function setUncompressedSize(int $uncompressedSize): PartitionInfoInterface
    {
        if ($this->uncompressedSize !== null) {
            throw new LogicException('uncompressedSize has already been set');
        }

        $this->uncompressedSize = $uncompressedSize;
        return $this;
    }

    public function hasUncompressedSize(): bool
    {
        return $this->uncompressedSize !== null;
    }


    public function getCompressedSize(): int
    {
        if ($this->compressedSize === null) {
            throw new LogicException('compressedSize has not been set');
        }

        return $this->compressedSize;
    }

    public function setCompressedSize(int $compressedSize): PartitionInfoInterface
    {
        if ($this->compressedSize !== null) {
            throw new LogicException('compressedSize has already been set');
        }

        $this->compressedSize = $compressedSize;
        return $this;
    }

    public function hasCompressedSize(): bool
    {
        return $this->compressedSize !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
