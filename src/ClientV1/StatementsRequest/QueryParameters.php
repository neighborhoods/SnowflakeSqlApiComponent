<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

class QueryParameters implements QueryParametersInterface
{
    /** @var string */
    private $requestId;

    /** @var int */
    private $partition;

    /** @var bool */
    private $async;

    /** @var bool */
    private $nullable;

    public function getRequestId(): string
    {
        if ($this->requestId === null) {
            throw new \LogicException('requestId has not been set');
        }

        return $this->requestId;
    }

    public function setRequestId(string $requestId): QueryParametersInterface
    {
        if ($this->requestId !== null) {
            throw new \LogicException('requestId has already been set');
        }

        $this->requestId = $requestId;
        return $this;
    }

    public function hasRequestId(): bool
    {
        return $this->requestId !== null;
    }


    public function getPartition(): int
    {
        if ($this->partition === null) {
            throw new \LogicException('partition has not been set');
        }

        return $this->partition;
    }

    public function setPartition(int $partition): QueryParametersInterface
    {
        if ($this->partition !== null) {
            throw new \LogicException('partition has already been set');
        }

        $this->partition = $partition;
        return $this;
    }

    public function hasPartition(): bool
    {
        return $this->partition !== null;
    }


    public function getAsync(): bool
    {
        if ($this->async === null) {
            throw new \LogicException('async has not been set');
        }

        return $this->async;
    }

    public function setAsync(bool $async): QueryParametersInterface
    {
        if ($this->async !== null) {
            throw new \LogicException('async has already been set');
        }

        $this->async = $async;
        return $this;
    }

    public function hasAsync(): bool
    {
        return $this->async !== null;
    }


    public function getNullable(): bool
    {
        if ($this->nullable === null) {
            throw new \LogicException('nullable has not been set');
        }

        return $this->nullable;
    }

    public function setNullable(bool $nullable): QueryParametersInterface
    {
        if ($this->nullable !== null) {
            throw new \LogicException('nullable has already been set');
        }

        $this->nullable = $nullable;
        return $this;
    }

    public function hasNullable(): bool
    {
        return $this->nullable !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function __toString(): string
    {
        $queryParameterParts = array();
        if ($this->requestId !== null) {
            $queryParameterParts[] = 'requestId=' . $this->requestId;
        }
        if ($this->partition !== null) {
            $queryParameterParts[] = 'partition=' . $this->partition;
        }
        if ($this->async) {
            $queryParameterParts[] = 'async=true';
        }
        if ($this->nullable !== null && $this->nullable === false) {
            $queryParameterParts[] = 'nullable=false';
        }
        return implode('&', $queryParameterParts);
    }
}
