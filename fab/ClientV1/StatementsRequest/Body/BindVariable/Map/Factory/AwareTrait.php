<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariableMapFactory;

    public function setClientV1StatementsRequestBodyBindVariableMapFactory(FactoryInterface $BindVariableMapFactory): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariableMapFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapFactory is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariableMapFactory = $BindVariableMapFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariableMapFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMapFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapFactory is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariableMapFactory;
    }

    protected function hasClientV1StatementsRequestBodyBindVariableMapFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariableMapFactory);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariableMapFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMapFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariableMapFactory);

        return $this;
    }
}
