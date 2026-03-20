<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\Parameters;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\ParametersInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyParameters;

    public function setClientV1StatementsRequestBodyParameters(ParametersInterface $Parameters): self
    {
        if ($this->hasClientV1StatementsRequestBodyParameters()) {
            throw new LogicException('ClientV1StatementsRequestBodyParameters is already set.');
        }
        $this->ClientV1StatementsRequestBodyParameters = $Parameters;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyParameters(): ParametersInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyParameters()) {
            throw new LogicException('ClientV1StatementsRequestBodyParameters is not set.');
        }

        return $this->ClientV1StatementsRequestBodyParameters;
    }

    protected function hasClientV1StatementsRequestBodyParameters(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyParameters);
    }

    protected function unsetClientV1StatementsRequestBodyParameters(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyParameters()) {
            throw new LogicException('ClientV1StatementsRequestBodyParameters is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyParameters);

        return $this;
    }
}
