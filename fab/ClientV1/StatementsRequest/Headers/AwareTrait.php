<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Headers;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\HeadersInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestHeaders;

    public function setClientV1StatementsRequestHeaders(HeadersInterface $Headers): self
    {
        if ($this->hasClientV1StatementsRequestHeaders()) {
            throw new LogicException('ClientV1StatementsRequestHeaders is already set.');
        }
        $this->ClientV1StatementsRequestHeaders = $Headers;

        return $this;
    }

    protected function getClientV1StatementsRequestHeaders(): HeadersInterface
    {
        if (!$this->hasClientV1StatementsRequestHeaders()) {
            throw new LogicException('ClientV1StatementsRequestHeaders is not set.');
        }

        return $this->ClientV1StatementsRequestHeaders;
    }

    protected function hasClientV1StatementsRequestHeaders(): bool
    {
        return isset($this->ClientV1StatementsRequestHeaders);
    }

    protected function unsetClientV1StatementsRequestHeaders(): self
    {
        if (!$this->hasClientV1StatementsRequestHeaders()) {
            throw new LogicException('ClientV1StatementsRequestHeaders is not set.');
        }
        unset($this->ClientV1StatementsRequestHeaders);

        return $this;
    }
}
