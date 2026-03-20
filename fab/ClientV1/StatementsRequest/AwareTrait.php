<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequestInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequest;

    public function setClientV1StatementsRequest(StatementsRequestInterface $StatementsRequest): self
    {
        if ($this->hasClientV1StatementsRequest()) {
            throw new LogicException('ClientV1StatementsRequest is already set.');
        }
        $this->ClientV1StatementsRequest = $StatementsRequest;

        return $this;
    }

    protected function getClientV1StatementsRequest(): StatementsRequestInterface
    {
        if (!$this->hasClientV1StatementsRequest()) {
            throw new LogicException('ClientV1StatementsRequest is not set.');
        }

        return $this->ClientV1StatementsRequest;
    }

    protected function hasClientV1StatementsRequest(): bool
    {
        return isset($this->ClientV1StatementsRequest);
    }

    protected function unsetClientV1StatementsRequest(): self
    {
        if (!$this->hasClientV1StatementsRequest()) {
            throw new LogicException('ClientV1StatementsRequest is not set.');
        }
        unset($this->ClientV1StatementsRequest);

        return $this;
    }
}
