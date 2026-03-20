<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

interface QueryParametersInterface extends \JsonSerializable
{
    public function getRequestId(): string;
    public function setRequestId(string $requestId): QueryParametersInterface;
    public function hasRequestId(): bool;

    public function getPartition(): int;
    public function setPartition(int $partition): QueryParametersInterface;
    public function hasPartition(): bool;

    public function getAsync(): bool;
    public function setAsync(bool $async): QueryParametersInterface;
    public function hasAsync(): bool;

    public function getNullable(): bool;
    public function setNullable(bool $nullable): QueryParametersInterface;
    public function hasNullable(): bool;

    public function __toString(): string;
}
