<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

use LogicException;

class ResultSet implements ResultSetInterface
{
    /** @var StatementsRequestInterface */
    private $request;

    /** @var int */
    private $httpStatusCode;

    /** @var string */
    private $code;

    /** @var string */
    private $sqlState;

    /** @var string */
    private $message;

    /** @var string */
    private $statementHandle;

    /** @var array */
    private $statementHandles;

    /** @var int */
    private $createdOn;

    /** @var string */
    private $statementStatusUrl;

    /** @var ResultSet\ResultSetMetaDataInterface */
    private $resultSetMetaData;

    /** @var array */
    private $data;

    /** @var ResultSet\StatsInterface */
    private $stats;

    public function getRequest(): StatementsRequestInterface
    {
        if ($this->request === null) {
            throw new LogicException('request has not been set');
        }

        return $this->request;
    }

    public function setRequest(StatementsRequestInterface $request): ResultSetInterface
    {
        if ($this->request !== null) {
            throw new LogicException('request has already been set');
        }

        $this->request = $request;
        return $this;
    }

    public function hasRequest(): bool
    {
        return $this->request !== null;
    }


    public function getHttpStatusCode(): int
    {
        if ($this->httpStatusCode === null) {
            throw new LogicException('httpStatusCode has not been set');
        }

        return $this->httpStatusCode;
    }

    public function setHttpStatusCode(int $httpStatusCode): ResultSetInterface
    {
        if ($this->httpStatusCode !== null) {
            throw new LogicException('httpStatusCode has already been set');
        }

        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }

    public function hasHttpStatusCode(): bool
    {
        return $this->httpStatusCode !== null;
    }


    public function getCode(): string
    {
        if ($this->code === null) {
            throw new LogicException('code has not been set');
        }

        return $this->code;
    }

    public function setCode(string $code): ResultSetInterface
    {
        if ($this->code !== null) {
            throw new LogicException('code has already been set');
        }

        $this->code = $code;
        return $this;
    }

    public function hasCode(): bool
    {
        return $this->code !== null;
    }


    public function getSqlState(): string
    {
        if ($this->sqlState === null) {
            throw new LogicException('sqlState has not been set');
        }

        return $this->sqlState;
    }

    public function setSqlState(string $sqlState): ResultSetInterface
    {
        if ($this->sqlState !== null) {
            throw new LogicException('sqlState has already been set');
        }

        $this->sqlState = $sqlState;
        return $this;
    }

    public function hasSqlState(): bool
    {
        return $this->sqlState !== null;
    }


    public function getMessage(): string
    {
        if ($this->message === null) {
            throw new LogicException('message has not been set');
        }

        return $this->message;
    }

    public function setMessage(string $message): ResultSetInterface
    {
        if ($this->message !== null) {
            throw new LogicException('message has already been set');
        }

        $this->message = $message;
        return $this;
    }

    public function hasMessage(): bool
    {
        return $this->message !== null;
    }


    public function getStatementHandle(): string
    {
        if ($this->statementHandle === null) {
            throw new LogicException('statementHandle has not been set');
        }

        return $this->statementHandle;
    }

    public function setStatementHandle(string $statementHandle): ResultSetInterface
    {
        if ($this->statementHandle !== null) {
            throw new LogicException('statementHandle has already been set');
        }

        $this->statementHandle = $statementHandle;
        return $this;
    }

    public function hasStatementHandle(): bool
    {
        return $this->statementHandle !== null;
    }


    public function getStatementHandles(): array
    {
        if ($this->statementHandles === null) {
            throw new LogicException('statementHandles has not been set');
        }

        return $this->statementHandles;
    }

    public function setStatementHandles(array $statementHandles): ResultSetInterface
    {
        if ($this->statementHandles !== null) {
            throw new LogicException('statementHandles has already been set');
        }

        $this->statementHandles = $statementHandles;
        return $this;
    }

    public function hasStatementHandles(): bool
    {
        return $this->statementHandles !== null;
    }


    public function getCreatedOn(): int
    {
        if ($this->createdOn === null) {
            throw new LogicException('createdOn has not been set');
        }

        return $this->createdOn;
    }

    public function setCreatedOn(int $createdOn): ResultSetInterface
    {
        if ($this->createdOn !== null) {
            throw new LogicException('createdOn has already been set');
        }

        $this->createdOn = $createdOn;
        return $this;
    }

    public function hasCreatedOn(): bool
    {
        return $this->createdOn !== null;
    }


    public function getStatementStatusUrl(): string
    {
        if ($this->statementStatusUrl === null) {
            throw new LogicException('statementStatusUrl has not been set');
        }

        return $this->statementStatusUrl;
    }

    public function setStatementStatusUrl(string $statementStatusUrl): ResultSetInterface
    {
        if ($this->statementStatusUrl !== null) {
            throw new LogicException('statementStatusUrl has already been set');
        }

        $this->statementStatusUrl = $statementStatusUrl;
        return $this;
    }

    public function hasStatementStatusUrl(): bool
    {
        return $this->statementStatusUrl !== null;
    }


    public function getResultSetMetaData(): ResultSet\ResultSetMetaDataInterface
    {
        if ($this->resultSetMetaData === null) {
            throw new LogicException('resultSetMetaData has not been set');
        }

        return $this->resultSetMetaData;
    }

    public function setResultSetMetaData(ResultSet\ResultSetMetaDataInterface $resultSetMetaData): ResultSetInterface
    {
        if ($this->resultSetMetaData !== null) {
            throw new LogicException('resultSetMetaData has already been set');
        }

        $this->resultSetMetaData = $resultSetMetaData;
        return $this;
    }

    public function hasResultSetMetaData(): bool
    {
        return $this->resultSetMetaData !== null;
    }


    public function getData(): array
    {
        if ($this->data === null) {
            throw new LogicException('data has not been set');
        }

        return $this->data;
    }

    public function setData(array $data): ResultSetInterface
    {
        if ($this->data !== null) {
            throw new LogicException('data has already been set');
        }

        $this->data = $data;
        return $this;
    }

    public function hasData(): bool
    {
        return $this->data !== null;
    }


    public function getStats(): ResultSet\StatsInterface
    {
        if ($this->stats === null) {
            throw new LogicException('stats has not been set');
        }

        return $this->stats;
    }

    public function setStats(ResultSet\StatsInterface $stats): ResultSetInterface
    {
        if ($this->stats !== null) {
            throw new LogicException('stats has already been set');
        }

        $this->stats = $stats;
        return $this;
    }

    public function hasStats(): bool
    {
        return $this->stats !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
