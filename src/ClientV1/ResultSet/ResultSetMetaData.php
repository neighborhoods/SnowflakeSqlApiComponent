<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use LogicException;

class ResultSetMetaData implements ResultSetMetaDataInterface
{
    /** @var int */
    private $partition;

    /** @var int */
    private $numRows;

    /** @var string */
    private $format;

    /** @var ResultSetMetaData\RowType\MapInterface */
    private $rowType;

    /** @var ResultSetMetaData\PartitionInfo\MapInterface */
    private $partitionInfo;

    public function getPartition(): int
    {
        if ($this->partition === null) {
            throw new LogicException('partition has not been set');
        }

        return $this->partition;
    }

    public function setPartition(int $partition): ResultSetMetaDataInterface
    {
        if ($this->partition !== null) {
            throw new LogicException('partition has already been set');
        }

        $this->partition = $partition;
        return $this;
    }

    public function hasPartition(): bool
    {
        return $this->partition !== null;
    }


    public function getNumRows(): int
    {
        if ($this->numRows === null) {
            throw new LogicException('numRows has not been set');
        }

        return $this->numRows;
    }

    public function setNumRows(int $numRows): ResultSetMetaDataInterface
    {
        if ($this->numRows !== null) {
            throw new LogicException('numRows has already been set');
        }

        $this->numRows = $numRows;
        return $this;
    }

    public function hasNumRows(): bool
    {
        return $this->numRows !== null;
    }


    public function getFormat(): string
    {
        if ($this->format === null) {
            throw new LogicException('format has not been set');
        }

        return $this->format;
    }

    public function setFormat(string $format): ResultSetMetaDataInterface
    {
        if ($this->format !== null) {
            throw new LogicException('format has already been set');
        }

        $this->format = $format;
        return $this;
    }

    public function hasFormat(): bool
    {
        return $this->format !== null;
    }


    public function getRowType(): ResultSetMetaData\RowType\MapInterface
    {
        if ($this->rowType === null) {
            throw new LogicException('rowType has not been set');
        }

        return $this->rowType;
    }

    public function setRowType(ResultSetMetaData\RowType\MapInterface $rowType): ResultSetMetaDataInterface
    {
        if ($this->rowType !== null) {
            throw new LogicException('rowType has already been set');
        }

        $this->rowType = $rowType;
        return $this;
    }

    public function hasRowType(): bool
    {
        return $this->rowType !== null;
    }


    public function getPartitionInfo(): ResultSetMetaData\PartitionInfo\MapInterface
    {
        if ($this->partitionInfo === null) {
            throw new LogicException('partitionInfo has not been set');
        }

        return $this->partitionInfo;
    }

    public function setPartitionInfo(
        ResultSetMetaData\PartitionInfo\MapInterface $partitionInfo
    ): ResultSetMetaDataInterface {
        if ($this->partitionInfo !== null) {
            throw new LogicException('partitionInfo has already been set');
        }

        $this->partitionInfo = $partitionInfo;
        return $this;
    }

    public function hasPartitionInfo(): bool
    {
        return $this->partitionInfo !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
