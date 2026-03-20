<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\Map;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\PartitionInfo\MapInterface;

class Builder implements BuilderInterface
{
    use PartitionInfo\Map\Factory\AwareTrait;
    use PartitionInfo\Builder\Factory\AwareTrait;

    /** @var array */
    protected $records = null;

    public function build(): MapInterface
    {
        $map = $this->getClientV1ResultSetResultSetMetaDataPartitionInfoMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $builder = $this->getClientV1ResultSetResultSetMetaDataPartitionInfoBuilderFactory()->create();
            $item = $builder->setRecord($record)->build();
            $map[] = $item;// @template-override
        }

        return $map;
    }

    protected function getRecords(): array
    {
        if ($this->records === null) {
            throw new \LogicException('Builder records has not been set.');
        }

        return $this->records;
    }

    public function setRecords(array $records): BuilderInterface
    {
        if ($this->records !== null) {
            throw new \LogicException('Builder records is already set.');
        }

        $this->records = $records;

        return $this;
    }
}
