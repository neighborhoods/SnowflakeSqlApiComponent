<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use LogicException;

class Stats implements StatsInterface
{
    /** @var int */
    private $numRowsInserted;

    /** @var int */
    private $numRowsUpdated;

    /** @var int */
    private $numRowsDeleted;

    /** @var int */
    private $numDuplicateRowsUpdated;

    public function getNumRowsInserted(): int
    {
        if ($this->numRowsInserted === null) {
            throw new LogicException('numRowsInserted has not been set');
        }

        return $this->numRowsInserted;
    }

    public function setNumRowsInserted(int $numRowsInserted): StatsInterface
    {
        if ($this->numRowsInserted !== null) {
            throw new LogicException('numRowsInserted has already been set');
        }

        $this->numRowsInserted = $numRowsInserted;
        return $this;
    }

    public function hasNumRowsInserted(): bool
    {
        return $this->numRowsInserted !== null;
    }


    public function getNumRowsUpdated(): int
    {
        if ($this->numRowsUpdated === null) {
            throw new LogicException('numRowsUpdated has not been set');
        }

        return $this->numRowsUpdated;
    }

    public function setNumRowsUpdated(int $numRowsUpdated): StatsInterface
    {
        if ($this->numRowsUpdated !== null) {
            throw new LogicException('numRowsUpdated has already been set');
        }

        $this->numRowsUpdated = $numRowsUpdated;
        return $this;
    }

    public function hasNumRowsUpdated(): bool
    {
        return $this->numRowsUpdated !== null;
    }


    public function getNumRowsDeleted(): int
    {
        if ($this->numRowsDeleted === null) {
            throw new LogicException('numRowsDeleted has not been set');
        }

        return $this->numRowsDeleted;
    }

    public function setNumRowsDeleted(int $numRowsDeleted): StatsInterface
    {
        if ($this->numRowsDeleted !== null) {
            throw new LogicException('numRowsDeleted has already been set');
        }

        $this->numRowsDeleted = $numRowsDeleted;
        return $this;
    }

    public function hasNumRowsDeleted(): bool
    {
        return $this->numRowsDeleted !== null;
    }


    public function getNumDuplicateRowsUpdated(): int
    {
        if ($this->numDuplicateRowsUpdated === null) {
            throw new LogicException('numDuplicateRowsUpdated has not been set');
        }

        return $this->numDuplicateRowsUpdated;
    }

    public function setNumDuplicateRowsUpdated(int $numDuplicateRowsUpdated): StatsInterface
    {
        if ($this->numDuplicateRowsUpdated !== null) {
            throw new LogicException('numDuplicateRowsUpdated has already been set');
        }

        $this->numDuplicateRowsUpdated = $numDuplicateRowsUpdated;
        return $this;
    }

    public function hasNumDuplicateRowsUpdated(): bool
    {
        return $this->numDuplicateRowsUpdated !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
