<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestFactory;

    public function setClientV1StatementsRequestFactory(FactoryInterface $StatementsRequestFactory): self
    {
        if ($this->hasClientV1StatementsRequestFactory()) {
            throw new LogicException('ClientV1StatementsRequestFactory is already set.');
        }
        $this->ClientV1StatementsRequestFactory = $StatementsRequestFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestFactory()) {
            throw new LogicException('ClientV1StatementsRequestFactory is not set.');
        }

        return $this->ClientV1StatementsRequestFactory;
    }

    protected function hasClientV1StatementsRequestFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestFactory);
    }

    protected function unsetClientV1StatementsRequestFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestFactory()) {
            throw new LogicException('ClientV1StatementsRequestFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestFactory);

        return $this;
    }
}
