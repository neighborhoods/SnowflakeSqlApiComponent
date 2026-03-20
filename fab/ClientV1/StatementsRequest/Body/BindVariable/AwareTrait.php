<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariableInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariable;

    public function setClientV1StatementsRequestBodyBindVariable(BindVariableInterface $BindVariable): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariable()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariable is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariable = $BindVariable;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariable(): BindVariableInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariable()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariable is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariable;
    }

    protected function hasClientV1StatementsRequestBodyBindVariable(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariable);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariable(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariable()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariable is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariable);

        return $this;
    }
}
