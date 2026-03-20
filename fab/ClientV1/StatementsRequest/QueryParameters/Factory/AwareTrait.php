<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParameters\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParameters\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestQueryParametersFactory;

    public function setClientV1StatementsRequestQueryParametersFactory(FactoryInterface $QueryParametersFactory): self
    {
        if ($this->hasClientV1StatementsRequestQueryParametersFactory()) {
            throw new LogicException('ClientV1StatementsRequestQueryParametersFactory is already set.');
        }
        $this->ClientV1StatementsRequestQueryParametersFactory = $QueryParametersFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestQueryParametersFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestQueryParametersFactory()) {
            throw new LogicException('ClientV1StatementsRequestQueryParametersFactory is not set.');
        }

        return $this->ClientV1StatementsRequestQueryParametersFactory;
    }

    protected function hasClientV1StatementsRequestQueryParametersFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestQueryParametersFactory);
    }

    protected function unsetClientV1StatementsRequestQueryParametersFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestQueryParametersFactory()) {
            throw new LogicException('ClientV1StatementsRequestQueryParametersFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestQueryParametersFactory);

        return $this;
    }
}
