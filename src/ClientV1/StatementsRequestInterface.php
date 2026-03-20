<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

interface StatementsRequestInterface extends \JsonSerializable
{
    public function getHost(): string;
    public function setHost(string $host): StatementsRequestInterface;
    public function hasHost(): bool;

    public function getMethod(): string;
    public function setMethod(string $method): StatementsRequestInterface;
    public function hasMethod(): bool;

    public function getPath(): string;
    public function setPath(string $path): StatementsRequestInterface;
    public function hasPath(): bool;

    public function getHeaders(): StatementsRequest\HeadersInterface;
    public function setHeaders(StatementsRequest\HeadersInterface $headers): StatementsRequestInterface;
    public function hasHeaders(): bool;

    public function getQueryParameters(): StatementsRequest\QueryParametersInterface;
    public function setQueryParameters(
        StatementsRequest\QueryParametersInterface $queryParameters
    ): StatementsRequestInterface;
    public function hasQueryParameters(): bool;

    public function getBody(): StatementsRequest\BodyInterface;
    public function setBody(StatementsRequest\BodyInterface $body): StatementsRequestInterface;
    public function hasBody(): bool;
}
