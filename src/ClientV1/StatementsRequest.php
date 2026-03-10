<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

use LogicException;

class StatementsRequest implements StatementsRequestInterface
{
    /** @var string */
    private $host;

    /** @var string */
    private $method;

    /** @var string */
    private $path;

    /** @var \Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\HeadersInterface */
    private $headers;

    /** @var \Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParametersInterface */
    private $queryParameters;

    /** @var \Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\BodyInterface */
    private $body;

    public function getHost(): string
    {
        if ($this->host === null) {
            throw new LogicException('host has not been set');
        }

        return $this->host;
    }

    public function setHost(string $host): StatementsRequestInterface
    {
        if ($this->host !== null) {
            throw new LogicException('host has already been set');
        }

        $this->host = $host;
        return $this;
    }

    public function hasHost(): bool
    {
        return $this->host !== null;
    }


    public function getMethod(): string
    {
        if ($this->method === null) {
            throw new LogicException('method has not been set');
        }

        return $this->method;
    }

    public function setMethod(string $method): StatementsRequestInterface
    {
        if ($this->method !== null) {
            throw new LogicException('method has already been set');
        }

        $this->method = $method;
        return $this;
    }

    public function hasMethod(): bool
    {
        return $this->method !== null;
    }


    public function getPath(): string
    {
        if ($this->path === null) {
            throw new LogicException('path has not been set');
        }

        return $this->path;
    }

    public function setPath(string $path): StatementsRequestInterface
    {
        if ($this->path !== null) {
            throw new LogicException('path has already been set');
        }

        $this->path = $path;
        return $this;
    }

    public function hasPath(): bool
    {
        return $this->path !== null;
    }


    public function getHeaders(): StatementsRequest\HeadersInterface
    {
        if ($this->headers === null) {
            throw new LogicException('headers has not been set');
        }

        return $this->headers;
    }

    public function setHeaders(StatementsRequest\HeadersInterface $headers): StatementsRequestInterface
    {
        if ($this->headers !== null) {
            throw new LogicException('headers has already been set');
        }

        $this->headers = $headers;
        return $this;
    }

    public function hasHeaders(): bool
    {
        return $this->headers !== null;
    }


    public function getQueryParameters(): StatementsRequest\QueryParametersInterface
    {
        if ($this->queryParameters === null) {
            throw new LogicException('queryParameters has not been set');
        }

        return $this->queryParameters;
    }

    public function setQueryParameters(
        StatementsRequest\QueryParametersInterface $queryParameters
    ): StatementsRequestInterface {
        if ($this->queryParameters !== null) {
            throw new LogicException('queryParameters has already been set');
        }

        $this->queryParameters = $queryParameters;
        return $this;
    }

    public function hasQueryParameters(): bool
    {
        return $this->queryParameters !== null;
    }


    public function getBody(): StatementsRequest\BodyInterface
    {
        if ($this->body === null) {
            throw new LogicException('body has not been set');
        }

        return $this->body;
    }

    public function setBody(StatementsRequest\BodyInterface $body): StatementsRequestInterface
    {
        if ($this->body !== null) {
            throw new LogicException('body has already been set');
        }

        $this->body = $body;
        return $this;
    }

    public function hasBody(): bool
    {
        return $this->body !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
