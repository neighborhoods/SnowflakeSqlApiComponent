<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaDataInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;
    use RowType\Map\Builder\Factory\AwareTrait;
    use PartitionInfo\Map\Builder\Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): ResultSetMetaDataInterface
    {
        $ResultSetMetaData = $this->getClientV1ResultSetResultSetMetaDataFactory()->create();

        $record = $this->getRecord();

        if (isset($record[ResultSetMetaDataInterface::PROP_PARTITION])) {
            $ResultSetMetaData->setPartition($record[ResultSetMetaDataInterface::PROP_PARTITION]);
        }
        if (isset($record[ResultSetMetaDataInterface::PROP_NUMROWS])) {
            $ResultSetMetaData->setNumRows($record[ResultSetMetaDataInterface::PROP_NUMROWS]);
        }
        if (isset($record[ResultSetMetaDataInterface::PROP_FORMAT])) {
            $ResultSetMetaData->setFormat($record[ResultSetMetaDataInterface::PROP_FORMAT]);
        }
        if (isset($record[ResultSetMetaDataInterface::PROP_ROWTYPE])) {
            $ResultSetMetaData->setRowType(
                $this->getClientV1ResultSetResultSetMetaDataRowTypeMapBuilderFactory()
                    ->create()
                    ->setRecords($record[ResultSetMetaDataInterface::PROP_ROWTYPE])
                    ->build()
            );
        }

        if (isset($record[ResultSetMetaDataInterface::PROP_PARTITIONINFO])) {
            $ResultSetMetaData->setPartitionInfo(
                $this->getClientV1ResultSetResultSetMetaDataPartitionInfoMapBuilderFactory()
                    ->create()
                    ->setRecords($record[ResultSetMetaDataInterface::PROP_PARTITIONINFO])
                    ->build()
            );
        }



        return $ResultSetMetaData;
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
