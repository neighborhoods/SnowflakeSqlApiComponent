<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariableBuilder;

    public function setClientV1StatementsRequestBodyBindVariableBuilder(BuilderInterface $BindVariableBuilder): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariableBuilder()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableBuilder is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariableBuilder = $BindVariableBuilder;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariableBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableBuilder()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableBuilder is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariableBuilder;
    }

    protected function hasClientV1StatementsRequestBodyBindVariableBuilder(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariableBuilder);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariableBuilder(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableBuilder()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableBuilder is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariableBuilder);

        return $this;
    }
}
