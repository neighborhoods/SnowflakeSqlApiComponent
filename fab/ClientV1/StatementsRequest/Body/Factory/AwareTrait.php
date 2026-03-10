<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyFactory;

    public function setClientV1StatementsRequestBodyFactory(FactoryInterface $BodyFactory): self
    {
        if ($this->hasClientV1StatementsRequestBodyFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyFactory is already set.');
        }
        $this->ClientV1StatementsRequestBodyFactory = $BodyFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyFactory is not set.');
        }

        return $this->ClientV1StatementsRequestBodyFactory;
    }

    protected function hasClientV1StatementsRequestBodyFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyFactory);
    }

    protected function unsetClientV1StatementsRequestBodyFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyFactory()) {
            throw new LogicException('ClientV1StatementsRequestBodyFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyFactory);

        return $this;
    }
}
