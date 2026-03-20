<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

interface HeadersInterface extends \JsonSerializable
{
    public function getAuthorization(): string;
    public function setAuthorization(string $authorization): HeadersInterface;
    public function overrideAuthorization(string $authorization): HeadersInterface;
    public function hasAuthorization(): bool;

    public function getAccept(): string;
    public function setAccept(string $accept): HeadersInterface;
    public function hasAccept(): bool;

    public function getContentType(): string;
    public function setContentType(string $contentType): HeadersInterface;
    public function hasContentType(): bool;

    public function getUserAgent(): string;
    public function setUserAgent(string $userAgent): HeadersInterface;
    public function hasUserAgent(): bool;

    public function getXSnowflakeAuthorizationTokenType(): string;
    public function setXSnowflakeAuthorizationTokenType(string $xSnowflakeAuthorizationTokenType): HeadersInterface;
    public function hasXSnowflakeAuthorizationTokenType(): bool;

    public function toArray(): array;
}
