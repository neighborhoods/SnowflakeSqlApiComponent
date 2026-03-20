<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Builder\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariableBuilderFactory;

    public function setClientV1StatementsRequestBodyBindVariableBuilderFactory(FactoryInterface $BindVariableBuilderFactory): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariableBuilderFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableBuilderFactory is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariableBuilderFactory = $BindVariableBuilderFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariableBuilderFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableBuilderFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableBuilderFactory is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariableBuilderFactory;
    }

    protected function hasClientV1StatementsRequestBodyBindVariableBuilderFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariableBuilderFactory);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariableBuilderFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableBuilderFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableBuilderFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariableBuilderFactory);

        return $this;
    }
}
