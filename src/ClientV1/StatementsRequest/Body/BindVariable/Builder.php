<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariableInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /**
     * @var mixed
     */
    protected $value;

    public function build(): BindVariableInterface
    {
        $BindVariable = $this->getClientV1StatementsRequestBodyBindVariableFactory()->create();

        if (is_integer($this->value)) {
            $type = BindVariableInterface::TYPE_FIXED;
            $value = (string)$this->value;
        } elseif (is_bool($this->value)) {
            $type = BindVariableInterface::TYPE_BOOLEAN;
            $value = (string)$this->value;
        } elseif (is_double($this->value) || is_float($this->value)) {
            $type = BindVariableInterface::TYPE_REAL;
            $value = (string)$this->value;
        } elseif ($this->value instanceof \DateTimeInterface) {
            $type = BindVariableInterface::TYPE_TIMESTAMP_NTZ;
            // U = unix timestamp, u = microseconds, append 3 zeroes to convert microseconds to nanoseconds
            $value = $this->value->format('Uu') . '000';
        } else {
            $type = BindVariableInterface::TYPE_TEXT;
            $value = (string)$this->value;
        }
        $BindVariable->setType($type);
        $BindVariable->setValue($value);


        return $BindVariable;
    }

    public function setValue($value): BuilderInterface
    {
        if ($this->value !== null) {
            throw new \LogicException('Builder value is already set.');
        }

        $this->value = $value;

        return $this;
    }
}
