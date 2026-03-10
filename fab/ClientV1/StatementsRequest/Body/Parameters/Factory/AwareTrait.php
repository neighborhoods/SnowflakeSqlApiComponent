<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\Parameters\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\Parameters\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyParametersFactory;

    public function setClientV1StatementsRequestBodyParametersFactory(FactoryInterface $ParametersFactory): self
    {
        if ($this->hasClientV1StatementsRequestBodyParametersFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyParametersFactory is already set.');
        }
        $this->ClientV1StatementsRequestBodyParametersFactory = $ParametersFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyParametersFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyParametersFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyParametersFactory is not set.');
        }

        return $this->ClientV1StatementsRequestBodyParametersFactory;
    }

    protected function hasClientV1StatementsRequestBodyParametersFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyParametersFactory);
    }

    protected function unsetClientV1StatementsRequestBodyParametersFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyParametersFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyParametersFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyParametersFactory);

        return $this;
    }
}
