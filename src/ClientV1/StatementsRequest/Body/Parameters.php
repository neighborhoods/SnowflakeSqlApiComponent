<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body;

use LogicException;

class Parameters implements ParametersInterface
{
    /** @var string */
    private $binary_output_format;

    /** @var int */
    private $client_result_chunk_size;

    /** @var string */
    private $date_output_format;

    /** @var string */
    private $MULTI_STATEMENT_COUNT;

    /** @var string */
    private $query_tag;

    /** @var int */
    private $rows_per_resultset;

    /** @var string */
    private $time_output_format;

    /** @var string */
    private $timestamp_ltz_output_format;

    /** @var string */
    private $timestamp_output_format;

    /** @var string */
    private $timestamp_tz_output_format;

    /** @var string */
    private $timezone;

    /** @var string */
    private $use_cached_result;

    public function getBinaryOutputFormat(): string
    {
        if ($this->binary_output_format === null) {
            throw new LogicException('binary_output_format has not been set');
        }

        return $this->binary_output_format;
    }

    public function setBinaryOutputFormat(string $binary_output_format): ParametersInterface
    {
        if ($this->binary_output_format !== null) {
            throw new LogicException('binary_output_format has already been set');
        }

        $this->binary_output_format = $binary_output_format;
        return $this;
    }

    public function hasBinaryOutputFormat(): bool
    {
        return $this->binary_output_format !== null;
    }


    public function getClientResultChunkSize(): int
    {
        if ($this->client_result_chunk_size === null) {
            throw new LogicException('client_result_chunk_size has not been set');
        }

        return $this->client_result_chunk_size;
    }

    public function setClientResultChunkSize(int $client_result_chunk_size): ParametersInterface
    {
        if ($this->client_result_chunk_size !== null) {
            throw new LogicException('client_result_chunk_size has already been set');
        }

        $this->client_result_chunk_size = $client_result_chunk_size;
        return $this;
    }

    public function hasClientResultChunkSize(): bool
    {
        return $this->client_result_chunk_size !== null;
    }


    public function getDateOutputFormat(): string
    {
        if ($this->date_output_format === null) {
            throw new LogicException('date_output_format has not been set');
        }

        return $this->date_output_format;
    }

    public function setDateOutputFormat(string $date_output_format): ParametersInterface
    {
        if ($this->date_output_format !== null) {
            throw new LogicException('date_output_format has already been set');
        }

        $this->date_output_format = $date_output_format;
        return $this;
    }

    public function hasDateOutputFormat(): bool
    {
        return $this->date_output_format !== null;
    }


    public function getMultiStatementCount(): string
    {
        if ($this->MULTI_STATEMENT_COUNT === null) {
            throw new LogicException('MULTI_STATEMENT_COUNT has not been set');
        }

        return $this->MULTI_STATEMENT_COUNT;
    }

    public function setMultiStatementCount(string $MULTI_STATEMENT_COUNT): ParametersInterface
    {
        if ($this->MULTI_STATEMENT_COUNT !== null) {
            throw new LogicException('MULTI_STATEMENT_COUNT has already been set');
        }

        $this->MULTI_STATEMENT_COUNT = $MULTI_STATEMENT_COUNT;
        return $this;
    }

    public function hasMultiStatementCount(): bool
    {
        return $this->MULTI_STATEMENT_COUNT !== null;
    }


    public function getQueryTag(): string
    {
        if ($this->query_tag === null) {
            throw new LogicException('query_tag has not been set');
        }

        return $this->query_tag;
    }

    public function setQueryTag(string $query_tag): ParametersInterface
    {
        if ($this->query_tag !== null) {
            throw new LogicException('query_tag has already been set');
        }

        $this->query_tag = $query_tag;
        return $this;
    }

    public function hasQueryTag(): bool
    {
        return $this->query_tag !== null;
    }


    public function getRowsPerResultset(): int
    {
        if ($this->rows_per_resultset === null) {
            throw new LogicException('rows_per_resultset has not been set');
        }

        return $this->rows_per_resultset;
    }

    public function setRowsPerResultset(int $rows_per_resultset): ParametersInterface
    {
        if ($this->rows_per_resultset !== null) {
            throw new LogicException('rows_per_resultset has already been set');
        }

        $this->rows_per_resultset = $rows_per_resultset;
        return $this;
    }

    public function hasRowsPerResultset(): bool
    {
        return $this->rows_per_resultset !== null;
    }


    public function getTimeOutputFormat(): string
    {
        if ($this->time_output_format === null) {
            throw new LogicException('time_output_format has not been set');
        }

        return $this->time_output_format;
    }

    public function setTimeOutputFormat(string $time_output_format): ParametersInterface
    {
        if ($this->time_output_format !== null) {
            throw new LogicException('time_output_format has already been set');
        }

        $this->time_output_format = $time_output_format;
        return $this;
    }

    public function hasTimeOutputFormat(): bool
    {
        return $this->time_output_format !== null;
    }


    public function getTimestampLtzOutputFormat(): string
    {
        if ($this->timestamp_ltz_output_format === null) {
            throw new LogicException('timestamp_ltz_output_format has not been set');
        }

        return $this->timestamp_ltz_output_format;
    }

    public function setTimestampLtzOutputFormat(string $timestamp_ltz_output_format): ParametersInterface
    {
        if ($this->timestamp_ltz_output_format !== null) {
            throw new LogicException('timestamp_ltz_output_format has already been set');
        }

        $this->timestamp_ltz_output_format = $timestamp_ltz_output_format;
        return $this;
    }

    public function hasTimestampLtzOutputFormat(): bool
    {
        return $this->timestamp_ltz_output_format !== null;
    }


    public function getTimestampOutputFormat(): string
    {
        if ($this->timestamp_output_format === null) {
            throw new LogicException('timestamp_output_format has not been set');
        }

        return $this->timestamp_output_format;
    }

    public function setTimestampOutputFormat(string $timestamp_output_format): ParametersInterface
    {
        if ($this->timestamp_output_format !== null) {
            throw new LogicException('timestamp_output_format has already been set');
        }

        $this->timestamp_output_format = $timestamp_output_format;
        return $this;
    }

    public function hasTimestampOutputFormat(): bool
    {
        return $this->timestamp_output_format !== null;
    }


    public function getTimestampTzOutputFormat(): string
    {
        if ($this->timestamp_tz_output_format === null) {
            throw new LogicException('timestamp_tz_output_format has not been set');
        }

        return $this->timestamp_tz_output_format;
    }

    public function setTimestampTzOutputFormat(string $timestamp_tz_output_format): ParametersInterface
    {
        if ($this->timestamp_tz_output_format !== null) {
            throw new LogicException('timestamp_tz_output_format has already been set');
        }

        $this->timestamp_tz_output_format = $timestamp_tz_output_format;
        return $this;
    }

    public function hasTimestampTzOutputFormat(): bool
    {
        return $this->timestamp_tz_output_format !== null;
    }


    public function getTimezone(): string
    {
        if ($this->timezone === null) {
            throw new LogicException('timezone has not been set');
        }

        return $this->timezone;
    }

    public function setTimezone(string $timezone): ParametersInterface
    {
        if ($this->timezone !== null) {
            throw new LogicException('timezone has already been set');
        }

        $this->timezone = $timezone;
        return $this;
    }

    public function hasTimezone(): bool
    {
        return $this->timezone !== null;
    }


    public function getUseCachedResult(): string
    {
        if ($this->use_cached_result === null) {
            throw new LogicException('use_cached_result has not been set');
        }

        return $this->use_cached_result;
    }

    public function setUseCachedResult(string $use_cached_result): ParametersInterface
    {
        if ($this->use_cached_result !== null) {
            throw new LogicException('use_cached_result has already been set');
        }

        $this->use_cached_result = $use_cached_result;
        return $this;
    }

    public function hasUseCachedResult(): bool
    {
        return $this->use_cached_result !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
