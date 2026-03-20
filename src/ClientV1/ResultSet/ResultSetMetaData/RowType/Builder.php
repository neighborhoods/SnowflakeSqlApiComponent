<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowTypeInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): RowTypeInterface
    {
        $RowType = $this->getClientV1ResultSetResultSetMetaDataRowTypeFactory()->create();

        $record = $this->getRecord();

        if (isset($record[RowTypeInterface::PROP_NAME])) {
            $RowType->setName($record[RowTypeInterface::PROP_NAME]);
        }
        if (isset($record[RowTypeInterface::PROP_TYPE])) {
            $RowType->setType($record[RowTypeInterface::PROP_TYPE]);
        }
        if (isset($record[RowTypeInterface::PROP_LENGTH])) {
            $RowType->setLength($record[RowTypeInterface::PROP_LENGTH]);
        }
        if (isset($record[RowTypeInterface::PROP_PRECISION])) {
            $RowType->setPrecision($record[RowTypeInterface::PROP_PRECISION]);
        }
        if (isset($record[RowTypeInterface::PROP_SCALE])) {
            $RowType->setScale($record[RowTypeInterface::PROP_SCALE]);
        }
        if (isset($record[RowTypeInterface::PROP_NULLABLE])) {
            $RowType->setNullable($record[RowTypeInterface::PROP_NULLABLE]);
        }


        return $RowType;
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
