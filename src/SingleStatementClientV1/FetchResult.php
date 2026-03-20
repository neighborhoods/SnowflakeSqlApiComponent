<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

class FetchResult implements FetchResultInterface
{
    /** @var ClientV1\ResultSet\ResultSetMetaDataInterface */
    private $resultSetMetaData;

    /** @var bool */
    private $ongoing;

    /** @var int */
    private $pageCount;

    /** @var array */
    private $castedRecords;

    public function getResultSetMetaData(): ClientV1\ResultSet\ResultSetMetaDataInterface
    {
        if ($this->resultSetMetaData === null) {
            throw new LogicException('resultSetMetaData has not been set');
        }

        return $this->resultSetMetaData;
    }

    public function setResultSetMetaData(
        ClientV1\ResultSet\ResultSetMetaDataInterface $resultSetMetaData
    ): FetchResultInterface {
        if ($this->resultSetMetaData !== null) {
            throw new LogicException('resultSetMetaData has already been set');
        }

        $this->resultSetMetaData = $resultSetMetaData;
        return $this;
    }

    public function hasResultSetMetaData(): bool
    {
        return $this->resultSetMetaData !== null;
    }
    public function getOngoing(): bool
    {
        if ($this->ongoing === null) {
            throw new LogicException('ongoing has not been set');
        }

        return $this->ongoing;
    }

    public function setOngoing(bool $ongoing): FetchResultInterface
    {
        if ($this->ongoing !== null) {
            throw new LogicException('ongoing has already been set');
        }

        $this->ongoing = $ongoing;
        return $this;
    }

    public function hasOngoing(): bool
    {
        return $this->ongoing !== null;
    }


    public function getPageCount(): int
    {
        if ($this->pageCount === null) {
            throw new LogicException('pageCount has not been set');
        }

        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): FetchResultInterface
    {
        if ($this->pageCount !== null) {
            throw new LogicException('pageCount has already been set');
        }

        $this->pageCount = $pageCount;
        return $this;
    }

    public function hasPageCount(): bool
    {
        return $this->pageCount !== null;
    }


    public function getCastedRecords(): array
    {
        if ($this->castedRecords === null) {
            throw new LogicException('castedRecords has not been set');
        }

        return $this->castedRecords;
    }

    public function setCastedRecords(array $castedRecords): FetchResultInterface
    {
        if ($this->castedRecords !== null) {
            throw new LogicException('castedRecords has already been set');
        }

        $this->castedRecords = $castedRecords;
        return $this;
    }

    public function hasCastedRecords(): bool
    {
        return $this->castedRecords !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
