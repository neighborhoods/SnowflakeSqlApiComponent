<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParameters;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParametersInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestQueryParameters;

    public function setClientV1StatementsRequestQueryParameters(QueryParametersInterface $QueryParameters): self
    {
        if ($this->hasClientV1StatementsRequestQueryParameters()) {
            throw new LogicException('ClientV1StatementsRequestQueryParameters is already set.');
        }
        $this->ClientV1StatementsRequestQueryParameters = $QueryParameters;

        return $this;
    }

    protected function getClientV1StatementsRequestQueryParameters(): QueryParametersInterface
    {
        if (!$this->hasClientV1StatementsRequestQueryParameters()) {
            throw new LogicException('ClientV1StatementsRequestQueryParameters is not set.');
        }

        return $this->ClientV1StatementsRequestQueryParameters;
    }

    protected function hasClientV1StatementsRequestQueryParameters(): bool
    {
        return isset($this->ClientV1StatementsRequestQueryParameters);
    }

    protected function unsetClientV1StatementsRequestQueryParameters(): self
    {
        if (!$this->hasClientV1StatementsRequestQueryParameters()) {
            throw new LogicException('ClientV1StatementsRequestQueryParameters is not set.');
        }
        unset($this->ClientV1StatementsRequestQueryParameters);

        return $this;
    }
}
