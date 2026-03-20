<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\Map;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData\RowType\MapInterface;

class Builder implements BuilderInterface
{
    use RowType\Map\Factory\AwareTrait;
    use RowType\Builder\Factory\AwareTrait;

    /** @var array */
    protected $records = null;

    public function build(): MapInterface
    {
        $map = $this->getClientV1ResultSetResultSetMetaDataRowTypeMapFactory()->create();
        foreach ($this->getRecords() as $record) {
            $builder = $this->getClientV1ResultSetResultSetMetaDataRowTypeBuilderFactory()->create();
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
