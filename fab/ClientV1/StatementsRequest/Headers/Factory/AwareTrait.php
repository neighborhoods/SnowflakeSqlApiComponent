<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Headers\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Headers\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestHeadersFactory;

    public function setClientV1StatementsRequestHeadersFactory(FactoryInterface $HeadersFactory): self
    {
        if ($this->hasClientV1StatementsRequestHeadersFactory()) {
            throw new LogicException('ClientV1StatementsRequestHeadersFactory is already set.');
        }
        $this->ClientV1StatementsRequestHeadersFactory = $HeadersFactory;

        return $this;
    }

    protected function getClientV1StatementsRequestHeadersFactory(): FactoryInterface
    {
        if (!$this->hasClientV1StatementsRequestHeadersFactory()) {
            throw new LogicException('ClientV1StatementsRequestHeadersFactory is not set.');
        }

        return $this->ClientV1StatementsRequestHeadersFactory;
    }

    protected function hasClientV1StatementsRequestHeadersFactory(): bool
    {
        return isset($this->ClientV1StatementsRequestHeadersFactory);
    }

    protected function unsetClientV1StatementsRequestHeadersFactory(): self
    {
        if (!$this->hasClientV1StatementsRequestHeadersFactory()) {
            throw new LogicException('ClientV1StatementsRequestHeadersFactory is not set.');
        }
        unset($this->ClientV1StatementsRequestHeadersFactory);

        return $this;
    }
}
