<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map\Builder;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map\BuilderInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBodyBindVariableMapBuilder;

    public function setClientV1StatementsRequestBodyBindVariableMapBuilder(BuilderInterface $BindVariableMapBuilder): self
    {
        if ($this->hasClientV1StatementsRequestBodyBindVariableMapBuilder()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapBuilder is already set.');
        }
        $this->ClientV1StatementsRequestBodyBindVariableMapBuilder = $BindVariableMapBuilder;

        return $this;
    }

    protected function getClientV1StatementsRequestBodyBindVariableMapBuilder(): BuilderInterface
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMapBuilder()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapBuilder is not set.');
        }

        return $this->ClientV1StatementsRequestBodyBindVariableMapBuilder;
    }

    protected function hasClientV1StatementsRequestBodyBindVariableMapBuilder(): bool
    {
        return isset($this->ClientV1StatementsRequestBodyBindVariableMapBuilder);
    }

    protected function unsetClientV1StatementsRequestBodyBindVariableMapBuilder(): self
    {
        if (!$this->hasClientV1StatementsRequestBodyBindVariableMapBuilder()) {
            throw new LogicException('ClientV1StatementsRequestBodyBindVariableMapBuilder is not set.');
        }
        unset($this->ClientV1StatementsRequestBodyBindVariableMapBuilder);

        return $this;
    }
}
