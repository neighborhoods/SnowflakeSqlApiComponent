<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

class Headers implements HeadersInterface
{
    /** @var string */
    private $authorization;

    /** @var string */
    private $accept;

    /** @var string */
    private $contentType;

    /** @var string */
    private $userAgent;

    /** @var string */
    private $xSnowflakeAuthorizationTokenType;

    public function getAuthorization(): string
    {
        if ($this->authorization === null) {
            throw new \LogicException('authorization has not been set');
        }

        return $this->authorization;
    }

    public function setAuthorization(string $authorization): HeadersInterface
    {
        if ($this->authorization !== null) {
            throw new \LogicException('authorization has already been set');
        }

        $this->authorization = $authorization;
        return $this;
    }

    public function overrideAuthorization(string $authorization): HeadersInterface
    {
        $this->authorization = $authorization;
        return $this;
    }

    public function hasAuthorization(): bool
    {
        return $this->authorization !== null;
    }


    public function getAccept(): string
    {
        if ($this->accept === null) {
            throw new \LogicException('accept has not been set');
        }

        return $this->accept;
    }

    public function setAccept(string $accept): HeadersInterface
    {
        if ($this->accept !== null) {
            throw new \LogicException('accept has already been set');
        }

        $this->accept = $accept;
        return $this;
    }

    public function hasAccept(): bool
    {
        return $this->accept !== null;
    }


    public function getContentType(): string
    {
        if ($this->contentType === null) {
            throw new \LogicException('contentType has not been set');
        }

        return $this->contentType;
    }

    public function setContentType(string $contentType): HeadersInterface
    {
        if ($this->contentType !== null) {
            throw new \LogicException('contentType has already been set');
        }

        $this->contentType = $contentType;
        return $this;
    }

    public function hasContentType(): bool
    {
        return $this->contentType !== null;
    }


    public function getUserAgent(): string
    {
        if ($this->userAgent === null) {
            throw new \LogicException('userAgent has not been set');
        }

        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): HeadersInterface
    {
        if ($this->userAgent !== null) {
            throw new \LogicException('userAgent has already been set');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    public function hasUserAgent(): bool
    {
        return $this->userAgent !== null;
    }


    public function getXSnowflakeAuthorizationTokenType(): string
    {
        if ($this->xSnowflakeAuthorizationTokenType === null) {
            throw new \LogicException('xSnowflakeAuthorizationTokenType has not been set');
        }

        return $this->xSnowflakeAuthorizationTokenType;
    }

    public function setXSnowflakeAuthorizationTokenType(string $xSnowflakeAuthorizationTokenType): HeadersInterface
    {
        if ($this->xSnowflakeAuthorizationTokenType !== null) {
            throw new \LogicException('xSnowflakeAuthorizationTokenType has already been set');
        }

        $this->xSnowflakeAuthorizationTokenType = $xSnowflakeAuthorizationTokenType;
        return $this;
    }

    public function hasXSnowflakeAuthorizationTokenType(): bool
    {
        return $this->xSnowflakeAuthorizationTokenType !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function toArray(): array
    {
        $headers = [];
        if ($this->hasAuthorization()) {
            $headers['Authorization'] = $this->getAuthorization();
        }
        if ($this->hasAccept()) {
            $headers['Accept'] = $this->getAccept();
        }
        if ($this->hasContentType()) {
            $headers['Content-Type'] = $this->getContentType();
        }
        if ($this->hasUserAgent()) {
            $headers['User-Agent'] = $this->getUserAgent();
        }
        if ($this->hasXSnowflakeAuthorizationTokenType()) {
            $headers['X-Snowflake-Authorization-Token-Type'] = $this->getXSnowflakeAuthorizationTokenType();
        }
        return $headers;
    }
}
