<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

interface FetchResultInterface extends \JsonSerializable
{
    public function getResultSetMetaData(): ClientV1\ResultSet\ResultSetMetaDataInterface;
    public function setResultSetMetaData(
        ClientV1\ResultSet\ResultSetMetaDataInterface $resultSetMetaData
    ): FetchResultInterface;
    public function hasResultSetMetaData(): bool;

    public function getOngoing(): bool;
    public function setOngoing(bool $ongoing): FetchResultInterface;
    public function hasOngoing(): bool;

    public function getPageCount(): int;
    public function setPageCount(int $pageCount): FetchResultInterface;
    public function hasPageCount(): bool;

    public function getCastedRecords(): array;
    public function setCastedRecords(array $castedRecords): FetchResultInterface;
    public function hasCastedRecords(): bool;
}
