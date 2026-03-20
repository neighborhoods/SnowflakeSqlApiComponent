<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body;

interface ParametersInterface extends \JsonSerializable
{
    public function getBinaryOutputFormat(): string;
    public function setBinaryOutputFormat(string $binary_output_format): ParametersInterface;
    public function hasBinaryOutputFormat(): bool;

    public function getClientResultChunkSize(): int;
    public function setClientResultChunkSize(int $client_result_chunk_size): ParametersInterface;
    public function hasClientResultChunkSize(): bool;

    public function getDateOutputFormat(): string;
    public function setDateOutputFormat(string $date_output_format): ParametersInterface;
    public function hasDateOutputFormat(): bool;

    public function getMultiStatementCount(): string;
    public function setMultiStatementCount(string $multi_statement_count): ParametersInterface;
    public function hasMultiStatementCount(): bool;

    public function getQueryTag(): string;
    public function setQueryTag(string $query_tag): ParametersInterface;
    public function hasQueryTag(): bool;

    public function getRowsPerResultset(): int;
    public function setRowsPerResultset(int $rows_per_resultset): ParametersInterface;
    public function hasRowsPerResultset(): bool;

    public function getTimeOutputFormat(): string;
    public function setTimeOutputFormat(string $time_output_format): ParametersInterface;
    public function hasTimeOutputFormat(): bool;

    public function getTimestampLtzOutputFormat(): string;
    public function setTimestampLtzOutputFormat(string $timestamp_ltz_output_format): ParametersInterface;
    public function hasTimestampLtzOutputFormat(): bool;

    public function getTimestampOutputFormat(): string;
    public function setTimestampOutputFormat(string $timestamp_output_format): ParametersInterface;
    public function hasTimestampOutputFormat(): bool;

    public function getTimestampTzOutputFormat(): string;
    public function setTimestampTzOutputFormat(string $timestamp_tz_output_format): ParametersInterface;
    public function hasTimestampTzOutputFormat(): bool;

    public function getTimezone(): string;
    public function setTimezone(string $timezone): ParametersInterface;
    public function hasTimezone(): bool;

    public function getUseCachedResult(): string;
    public function setUseCachedResult(string $use_cached_result): ParametersInterface;
    public function hasUseCachedResult(): bool;
}
