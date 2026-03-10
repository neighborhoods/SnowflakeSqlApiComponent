<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet;

class DataCaster implements DataCasterInterface
{
    use ResultSetMetaData\RowType\Map\AwareTrait;

    /** @var array */
    private $rows;

    public function cast(): array
    {
        $castedRows = array();
        foreach ($this->getRows() as $row) {
            $castedRow = array();
            for ($columnIndex = 0; $columnIndex < count($row); $columnIndex++) {
                $rowType = $this->getClientV1ResultSetResultSetMetaDataRowTypeMap()[$columnIndex];
                $castedRow[$rowType->getName()] = $this->castColumnValue($row[$columnIndex], $rowType);
            }
            $castedRows[] = $castedRow;
        }
        return $castedRows;
    }

    /**
     * @return mixed
     */
    private function castColumnValue(
        ?string $columnValue,
        ResultSet\ResultSetMetaData\RowTypeInterface $columnType
    ) {
        if ($columnValue == null) {
            return null;
        }
        switch ($columnType->getType()) {
            case 'boolean':
                return (bool)$columnValue;
            case 'fixed':
                if ($columnType->getScale() === 0) {
                    return (int)$columnValue;
                }
                return (double)$columnValue;
            case 'real':
                return (double)$columnValue;
            case 'timestamp_ltz':
            case 'timestamp_ntz':
                // Snowflake provides the time with nanosecond precision.
                // PHP raises an error if the precision is beyond microseconds
                // therefore drop the last 3 digits
                return new \DateTimeImmutable('@' . substr($columnValue, 0, -3));
            case 'timestamp_tz':
                // Snowflake provides space-separated timestamp with nanosecond precision, followed by the timezone
                // PHP raises an error if the precision is beyond microseconds
                // therefore drop the last 3 digits
                return new \DateTimeImmutable('@' . substr(explode(' ', $columnValue)[0], 0, -3));
            case 'text':
                return $columnValue;
            default:
                throw new \InvalidArgumentException(
                    'Column ' . $columnType->getName() . ' has unsupported type: ' . $columnType->getType()
                );
        }
    }


    public function getRows(): array
    {
        if ($this->rows === null) {
            throw new \LogicException('rows has not been set');
        }

        return $this->rows;
    }

    public function setRows(array $rows): DataCasterInterface
    {
        if ($this->rows !== null) {
            throw new \LogicException('rows has already been set');
        }

        $this->rows = $rows;
        return $this;
    }

    public function hasRows(): bool
    {
        return $this->rows !== null;
    }
}
