<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\MapInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariables;

    public function setClientV1StatementsRequestBodyBindVariableMap(MapInterface $BindVariables): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariableMap()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariables is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariables = $BindVariables;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariableMap(): MapInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMap()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariables is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariables;
    }

    protected function hasClientV1StatementsRequestBodyBindVariableMap(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariables);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariableMap(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMap()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariables is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariables);

        return $this;
    }
}
