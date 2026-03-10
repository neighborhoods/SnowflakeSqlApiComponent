<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\Stats;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\StatsInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): StatsInterface
    {
        $Stats = $this->getClientV1ResultSetStatsFactory()->create();

        $record = $this->getRecord();

        if (isset($record[StatsInterface::PROP_NUMROWSINSERTED])) {
            $Stats->setNumRowsInserted($record[StatsInterface::PROP_NUMROWSINSERTED]);
        }
        if (isset($record[StatsInterface::PROP_NUMROWSUPDATED])) {
            $Stats->setNumRowsUpdated($record[StatsInterface::PROP_NUMROWSUPDATED]);
        }
        if (isset($record[StatsInterface::PROP_NUMROWSDELETED])) {
            $Stats->setNumRowsDeleted($record[StatsInterface::PROP_NUMROWSDELETED]);
        }
        if (isset($record[StatsInterface::PROP_NUMDUPLICATEROWSUPDATED])) {
            $Stats->setNumDuplicateRowsUpdated($record[StatsInterface::PROP_NUMDUPLICATEROWSUPDATED]);
        }


        return $Stats;
    }

    protected function getRecord(): array
    {
        if ($this->record === null) {
            throw new LogicException('Builder record has not been set.');
        }

        return $this->record;
    }

    public function setRecord(array $record): BuilderInterface
    {
        if ($this->record !== null) {
            throw new LogicException('Builder record is already set.');
        }

        $this->record = $record;

        return $this;
    }
}
