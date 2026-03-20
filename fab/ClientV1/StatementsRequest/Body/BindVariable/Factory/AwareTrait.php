<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariableFactory;

    public function setClientV1StatementsRequestBodyBindVariableFactory(FactoryInterface $BindVariableFactory): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariableFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableFactory is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariableFactory = $BindVariableFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariableFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableFactory is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariableFactory;
    }

    protected function hasClientV1StatementsRequestBodyBindVariableFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariableFactory);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariableFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariableFactory);

        return $this;
    }
}
