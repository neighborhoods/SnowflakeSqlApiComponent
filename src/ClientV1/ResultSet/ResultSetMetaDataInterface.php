<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

interface ResultSetMetaDataInterface extends \JsonSerializable
{
    public const PROP_PARTITION = 'partition';
    public const PROP_NUMROWS = 'numRows';
    public const PROP_FORMAT = 'format';
    public const PROP_ROWTYPE = 'rowType';
    public const PROP_PARTITIONINFO = 'partitionInfo';

    public function getPartition(): int;
    public function setPartition(int $partition): ResultSetMetaDataInterface;
    public function hasPartition(): bool;

    public function getNumRows(): int;
    public function setNumRows(int $numRows): ResultSetMetaDataInterface;
    public function hasNumRows(): bool;

    public function getFormat(): string;
    public function setFormat(string $format): ResultSetMetaDataInterface;
    public function hasFormat(): bool;

    public function getRowType(): ResultSetMetaData\RowType\MapInterface;
    public function setRowType(ResultSetMetaData\RowType\MapInterface $rowType): ResultSetMetaDataInterface;
    public function hasRowType(): bool;

    public function getPartitionInfo(): ResultSetMetaData\PartitionInfo\MapInterface;
    public function setPartitionInfo(
        ResultSetMetaData\PartitionInfo\MapInterface $partitionInfo
    ): ResultSetMetaDataInterface;
    public function hasPartitionInfo(): bool;
}
