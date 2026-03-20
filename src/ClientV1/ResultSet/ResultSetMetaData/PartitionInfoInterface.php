<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

interface PartitionInfoInterface extends \JsonSerializable
{
    public const PROP_ROWCOUNT = 'rowCount';
    public const PROP_UNCOMPRESSEDSIZE = 'uncompressedSize';
    public const PROP_COMPRESSEDSIZE = 'compressedSize';

    public function getRowCount(): int;
    public function setRowCount(int $rowCount): PartitionInfoInterface;
    public function hasRowCount(): bool;

    public function getUncompressedSize(): int;
    public function setUncompressedSize(int $uncompressedSize): PartitionInfoInterface;
    public function hasUncompressedSize(): bool;

    public function getCompressedSize(): int;
    public function setCompressedSize(int $compressedSize): PartitionInfoInterface;
    public function hasCompressedSize(): bool;
}
