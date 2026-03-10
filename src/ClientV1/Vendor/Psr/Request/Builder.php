<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class Builder implements BuilderInterface
{
    /** @var string */
    private $method;
    /** @var string */
    private $uri;
    /** @var array */
    private $headers = [];
    /** @var string|null */
    private $body;

    public function build(): RequestInterface
    {
        return new Request($this->getMethod(), $this->getUri(), $this->getHeaders(), $this->getBody());
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return BuilderInterface
     */
    public function setMethod(string $method): BuilderInterface
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return BuilderInterface
     */
    public function setUri(string $uri): BuilderInterface
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     * @return BuilderInterface
     */
    public function setHeaders(array $headers): BuilderInterface
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $body
     * @return BuilderInterface
     */
    public function setBody(?string $body): BuilderInterface
    {
        $this->body = $body;
        return $this;
    }
}
