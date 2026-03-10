<?php

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Vendor\Psr\Request;

use Psr\Http\Message\RequestInterface;

interface BuilderInterface
{
    public function build(): RequestInterface;

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @param string $method
     * @return BuilderInterface
     */
    public function setMethod(string $method): BuilderInterface;

    /**
     * @return string
     */
    public function getUri(): string;

    /**
     * @param string $uri
     * @return BuilderInterface
     */
    public function setUri(string $uri): BuilderInterface;

    /**
     * @return array
     */
    public function getHeaders(): array;

    /**
     * @param array $headers
     * @return BuilderInterface
     */
    public function setHeaders(array $headers): BuilderInterface;

    /**
     * @return string|null
     */
    public function getBody(): ?string;

    /**
     * @param string|null $body
     * @return BuilderInterface
     */
    public function setBody(?string $body): BuilderInterface;
}
