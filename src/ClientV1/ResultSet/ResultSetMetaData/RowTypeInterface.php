<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\ResultSetMetaData;

interface RowTypeInterface extends \JsonSerializable
{
    public const PROP_NAME = 'name';
    public const PROP_TYPE = 'type';
    public const PROP_LENGTH = 'length';
    public const PROP_PRECISION = 'precision';
    public const PROP_SCALE = 'scale';
    public const PROP_NULLABLE = 'nullable';

    public function getName(): string;
    public function setName(string $name): RowTypeInterface;
    public function hasName(): bool;

    public function getType(): string;
    public function setType(string $type): RowTypeInterface;
    public function hasType(): bool;

    public function getLength(): int;
    public function setLength(int $length): RowTypeInterface;
    public function hasLength(): bool;

    public function getPrecision(): int;
    public function setPrecision(int $precision): RowTypeInterface;
    public function hasPrecision(): bool;

    public function getScale(): int;
    public function setScale(int $scale): RowTypeInterface;
    public function hasScale(): bool;

    public function getNullable(): bool;
    public function setNullable(bool $nullable): RowTypeInterface;
    public function hasNullable(): bool;
}
