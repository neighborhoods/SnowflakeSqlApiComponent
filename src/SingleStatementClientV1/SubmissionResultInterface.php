<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

interface SubmissionResultInterface extends \JsonSerializable
{
    public function getHandle(): string;
    public function setHandle(string $handle): SubmissionResultInterface;
    public function hasHandle(): bool;

    public function getResultSetMetaData(): ClientV1\ResultSet\ResultSetMetaDataInterface;
    public function setResultSetMetaData(
        ClientV1\ResultSet\ResultSetMetaDataInterface $resultSetMetaData
    ): SubmissionResultInterface;
    public function hasResultSetMetaData(): bool;

    public function getOngoing(): bool;
    public function setOngoing(bool $ongoing): SubmissionResultInterface;
    public function hasOngoing(): bool;

    public function getPageCount(): int;
    public function setPageCount(int $pageCount): SubmissionResultInterface;
    public function hasPageCount(): bool;

    public function getCastedRecords(): array;
    public function setCastedRecords(array $castedRecords): SubmissionResultInterface;
    public function hasCastedRecords(): bool;
}
