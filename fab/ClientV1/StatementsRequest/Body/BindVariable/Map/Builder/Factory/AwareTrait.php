<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariableMapBuilderFactory;

    public function setClientV1StatementsRequestBodyBindVariableMapBuilderFactory(FactoryInterface $BindVariableMapBuilderFactory): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariableMapBuilderFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapBuilderFactory is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariableMapBuilderFactory = $BindVariableMapBuilderFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariableMapBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMapBuilderFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapBuilderFactory is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariableMapBuilderFactory;
    }

    protected function hasClientV1StatementsRequestBodyBindVariableMapBuilderFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariableMapBuilderFactory);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariableMapBuilderFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMapBuilderFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapBuilderFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariableMapBuilderFactory);

        return $this;
    }
}
