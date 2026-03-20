<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

interface ResultSetInterface extends \JsonSerializable
{
    public const PROP_REQUEST = 'request';
    public const PROP_HTTPSTATUSCODE = 'httpStatusCode';
    public const PROP_CODE = 'code';
    public const PROP_SQLSTATE = 'sqlState';
    public const PROP_MESSAGE = 'message';
    public const PROP_STATEMENTHANDLE = 'statementHandle';
    public const PROP_STATEMENTHANDLES = 'statementHandles';
    public const PROP_CREATEDON = 'createdOn';
    public const PROP_STATEMENTSTATUSURL = 'statementStatusUrl';
    public const PROP_RESULTSETMETADATA = 'resultSetMetaData';
    public const PROP_DATA = 'data';
    public const PROP_STATS = 'stats';

    public function getRequest(): StatementsRequestInterface;
    public function setRequest(StatementsRequestInterface $request): ResultSetInterface;
    public function hasRequest(): bool;

    public function getHttpStatusCode(): int;
    public function setHttpStatusCode(int $httpStatusCode): ResultSetInterface;
    public function hasHttpStatusCode(): bool;

    public function getCode(): string;
    public function setCode(string $code): ResultSetInterface;
    public function hasCode(): bool;

    public function getSqlState(): string;
    public function setSqlState(string $sqlState): ResultSetInterface;
    public function hasSqlState(): bool;

    public function getMessage(): string;
    public function setMessage(string $message): ResultSetInterface;
    public function hasMessage(): bool;

    public function getStatementHandle(): string;
    public function setStatementHandle(string $statementHandle): ResultSetInterface;
    public function hasStatementHandle(): bool;

    public function getStatementHandles(): array;
    public function setStatementHandles(array $statementHandles): ResultSetInterface;
    public function hasStatementHandles(): bool;

    public function getCreatedOn(): int;
    public function setCreatedOn(int $createdOn): ResultSetInterface;
    public function hasCreatedOn(): bool;

    public function getStatementStatusUrl(): string;
    public function setStatementStatusUrl(string $statementStatusUrl): ResultSetInterface;
    public function hasStatementStatusUrl(): bool;

    public function getResultSetMetaData(): ResultSet\ResultSetMetaDataInterface;
    public function setResultSetMetaData(ResultSet\ResultSetMetaDataInterface $resultSetMetaData): ResultSetInterface;
    public function hasResultSetMetaData(): bool;

    public function getData(): array;
    public function setData(array $data): ResultSetInterface;
    public function hasData(): bool;

    public function getStats(): ResultSet\StatsInterface;
    public function setStats(ResultSet\StatsInterface $stats): ResultSetInterface;
    public function hasStats(): bool;
}
