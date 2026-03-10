<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body;

interface BindVariableInterface extends \JsonSerializable
{
    public const TYPE_TEXT = 'TEXT';
    public const TYPE_BOOLEAN = 'BOOLEAN';
    public const TYPE_FIXED = 'FIXED';
    public const TYPE_REAL = 'REAL';
    public const TYPE_TIMESTAMP_NTZ = 'TIMESTAMP_NTZ';

    public function getType(): string;
    public function setType(string $type): BindVariableInterface;
    public function hasType(): bool;

    public function getValue(): string;
    public function setValue(string $value): BindVariableInterface;
    public function hasValue(): bool;
}
