<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

use LogicException;

class Body implements BodyInterface
{
    /** @var string */
    private $statement;

    /** @var int */
    private $timeout;

    /** @var string */
    private $database;

    /** @var string */
    private $schema;

    /** @var string */
    private $warehouse;

    /** @var string */
    private $role;

    /** @var \Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\MapInterface */
    private $bindings;

    /** @var \Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\ParametersInterface */
    private $parameters;

    public function getStatement(): string
    {
        if ($this->statement === null) {
            throw new LogicException('statement has not been set');
        }

        return $this->statement;
    }

    public function setStatement(string $statement): BodyInterface
    {
        if ($this->statement !== null) {
            throw new LogicException('statement has already been set');
        }

        $this->statement = $statement;
        return $this;
    }

    public function hasStatement(): bool
    {
        return $this->statement !== null;
    }


    public function getTimeout(): int
    {
        if ($this->timeout === null) {
            throw new LogicException('timeout has not been set');
        }

        return $this->timeout;
    }

    public function setTimeout(int $timeout): BodyInterface
    {
        if ($this->timeout !== null) {
            throw new LogicException('timeout has already been set');
        }

        $this->timeout = $timeout;
        return $this;
    }

    public function hasTimeout(): bool
    {
        return $this->timeout !== null;
    }


    public function getDatabase(): string
    {
        if ($this->database === null) {
            throw new LogicException('database has not been set');
        }

        return $this->database;
    }

    public function setDatabase(string $database): BodyInterface
    {
        if ($this->database !== null) {
            throw new LogicException('database has already been set');
        }

        $this->database = $database;
        return $this;
    }

    public function hasDatabase(): bool
    {
        return $this->database !== null;
    }


    public function getSchema(): string
    {
        if ($this->schema === null) {
            throw new LogicException('schema has not been set');
        }

        return $this->schema;
    }

    public function setSchema(string $schema): BodyInterface
    {
        if ($this->schema !== null) {
            throw new LogicException('schema has already been set');
        }

        $this->schema = $schema;
        return $this;
    }

    public function hasSchema(): bool
    {
        return $this->schema !== null;
    }


    public function getWarehouse(): string
    {
        if ($this->warehouse === null) {
            throw new LogicException('warehouse has not been set');
        }

        return $this->warehouse;
    }

    public function setWarehouse(string $warehouse): BodyInterface
    {
        if ($this->warehouse !== null) {
            throw new LogicException('warehouse has already been set');
        }

        $this->warehouse = $warehouse;
        return $this;
    }

    public function hasWarehouse(): bool
    {
        return $this->warehouse !== null;
    }


    public function getRole(): string
    {
        if ($this->role === null) {
            throw new LogicException('role has not been set');
        }

        return $this->role;
    }

    public function setRole(string $role): BodyInterface
    {
        if ($this->role !== null) {
            throw new LogicException('role has already been set');
        }

        $this->role = $role;
        return $this;
    }

    public function hasRole(): bool
    {
        return $this->role !== null;
    }


    public function getBindings(): Body\BindVariable\MapInterface
    {
        if ($this->bindings === null) {
            throw new LogicException('bindings has not been set');
        }

        return $this->bindings;
    }

    public function setBindings(Body\BindVariable\MapInterface $bindings): BodyInterface
    {
        if ($this->bindings !== null) {
            throw new LogicException('bindings has already been set');
        }

        $this->bindings = $bindings;
        return $this;
    }

    public function hasBindings(): bool
    {
        return $this->bindings !== null;
    }


    public function getParameters(): Body\ParametersInterface
    {
        if ($this->parameters === null) {
            throw new LogicException('parameters has not been set');
        }

        return $this->parameters;
    }

    public function setParameters(Body\ParametersInterface $parameters): BodyInterface
    {
        if ($this->parameters !== null) {
            throw new LogicException('parameters has already been set');
        }

        $this->parameters = $parameters;
        return $this;
    }

    public function hasParameters(): bool
    {
        return $this->parameters !== null;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
