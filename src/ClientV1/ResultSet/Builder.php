<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSetInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use ResultSetMetaData\Builder\Factory\AwareTrait;
    use Stats\Builder\Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): ResultSetInterface
    {
        $ResultSet = $this->getClientV1ResultSetFactory()->create();

        $record = $this->getRecord();

        if (isset($record[ResultSetInterface::PROP_HTTPSTATUSCODE])) {
            $ResultSet->setHttpStatusCode($record[ResultSetInterface::PROP_HTTPSTATUSCODE]);
        }
        if (isset($record[ResultSetInterface::PROP_CODE])) {
            $ResultSet->setCode($record[ResultSetInterface::PROP_CODE]);
        }
        if (isset($record[ResultSetInterface::PROP_SQLSTATE])) {
            $ResultSet->setSqlState($record[ResultSetInterface::PROP_SQLSTATE]);
        }
        if (isset($record[ResultSetInterface::PROP_MESSAGE])) {
            $ResultSet->setMessage($record[ResultSetInterface::PROP_MESSAGE]);
        }
        if (isset($record[ResultSetInterface::PROP_STATEMENTHANDLE])) {
            $ResultSet->setStatementHandle($record[ResultSetInterface::PROP_STATEMENTHANDLE]);
        }
        if (isset($record[ResultSetInterface::PROP_STATEMENTHANDLES])) {
            $ResultSet->setStatementHandles($record[ResultSetInterface::PROP_STATEMENTHANDLES]);
        }
        if (isset($record[ResultSetInterface::PROP_CREATEDON])) {
            $ResultSet->setCreatedOn($record[ResultSetInterface::PROP_CREATEDON]);
        }
        if (isset($record[ResultSetInterface::PROP_STATEMENTSTATUSURL])) {
            $ResultSet->setStatementStatusUrl($record[ResultSetInterface::PROP_STATEMENTSTATUSURL]);
        }
        if (isset($record[ResultSetInterface::PROP_RESULTSETMETADATA])) {
            $ResultSet->setResultSetMetaData(
                $this->getClientV1ResultSetResultSetMetaDataBuilderFactory()
                    ->create()
                    ->setRecord($record[ResultSetInterface::PROP_RESULTSETMETADATA])
                    ->build()
            );
        }

        if (isset($record[ResultSetInterface::PROP_DATA])) {
            $ResultSet->setData($record[ResultSetInterface::PROP_DATA]);
        }
        if (isset($record[ResultSetInterface::PROP_STATS])) {
            $ResultSet->setStats(
                $this->getClientV1ResultSetStatsBuilderFactory()
                    ->create()
                    ->setRecord($record[ResultSetInterface::PROP_STATS])
                    ->build()
            );
        }



        return $ResultSet;
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
