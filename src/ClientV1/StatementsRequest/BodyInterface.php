<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

interface BodyInterface extends \JsonSerializable
{
    public function getStatement(): string;
    public function setStatement(string $statement): BodyInterface;
    public function hasStatement(): bool;

    public function getTimeout(): int;
    public function setTimeout(int $timeout): BodyInterface;
    public function hasTimeout(): bool;

    public function getDatabase(): string;
    public function setDatabase(string $database): BodyInterface;
    public function hasDatabase(): bool;

    public function getSchema(): string;
    public function setSchema(string $schema): BodyInterface;
    public function hasSchema(): bool;

    public function getWarehouse(): string;
    public function setWarehouse(string $warehouse): BodyInterface;
    public function hasWarehouse(): bool;

    public function getRole(): string;
    public function setRole(string $role): BodyInterface;
    public function hasRole(): bool;

    public function getBindings(): Body\BindVariable\MapInterface;
    public function setBindings(Body\BindVariable\MapInterface $bindings): BodyInterface;
    public function hasBindings(): bool;

    public function getParameters(): Body\ParametersInterface;
    public function setParameters(Body\ParametersInterface $parameters): BodyInterface;
    public function hasParameters(): bool;
}
