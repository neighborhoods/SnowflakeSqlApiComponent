<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfoInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array */
    protected $record;

    public function build(): PartitionInfoInterface
    {
        $PartitionInfo = $this->getClientV1ResultSetResultSetMetaDataPartitionInfoFactory()->create();

        $record = $this->getRecord();

        if (isset($record[PartitionInfoInterface::PROP_ROWCOUNT])) {
            $PartitionInfo->setRowCount($record[PartitionInfoInterface::PROP_ROWCOUNT]);
        }
        if (isset($record[PartitionInfoInterface::PROP_UNCOMPRESSEDSIZE])) {
            $PartitionInfo->setUncompressedSize($record[PartitionInfoInterface::PROP_UNCOMPRESSEDSIZE]);
        }
        if (isset($record[PartitionInfoInterface::PROP_COMPRESSEDSIZE])) {
            $PartitionInfo->setCompressedSize($record[PartitionInfoInterface::PROP_COMPRESSEDSIZE]);
        }


        return $PartitionInfo;
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
