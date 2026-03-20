<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

interface StatsInterface extends \JsonSerializable
{
    public const PROP_NUMROWSINSERTED = 'numRowsInserted';
    public const PROP_NUMROWSUPDATED = 'numRowsUpdated';
    public const PROP_NUMROWSDELETED = 'numRowsDeleted';
    public const PROP_NUMDUPLICATEROWSUPDATED = 'numDuplicateRowsUpdated';

    public function getNumRowsInserted(): int;
    public function setNumRowsInserted(int $numRowsInserted): StatsInterface;
    public function hasNumRowsInserted(): bool;

    public function getNumRowsUpdated(): int;
    public function setNumRowsUpdated(int $numRowsUpdated): StatsInterface;
    public function hasNumRowsUpdated(): bool;

    public function getNumRowsDeleted(): int;
    public function setNumRowsDeleted(int $numRowsDeleted): StatsInterface;
    public function hasNumRowsDeleted(): bool;

    public function getNumDuplicateRowsUpdated(): int;
    public function setNumDuplicateRowsUpdated(int $numDuplicateRowsUpdated): StatsInterface;
    public function hasNumDuplicateRowsUpdated(): bool;
}
