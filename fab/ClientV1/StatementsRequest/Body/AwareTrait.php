<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\BodyInterface;

trait AwareTrait
{
    protected $ClientV1StatementsRequestBody;

    public function setClientV1StatementsRequestBody(BodyInterface $Body): self
    {
        if ($this->hasClientV1StatementsRequestBody()) {
            throw new LogicException('ClientV1StatementsRequestBody is already set.');
        }
        $this->ClientV1StatementsRequestBody = $Body;

        return $this;
    }

    protected function getClientV1StatementsRequestBody(): BodyInterface
    {
        if (!$this->hasClientV1StatementsRequestBody()) {
            throw new LogicException('ClientV1StatementsRequestBody is not set.');
        }

        return $this->ClientV1StatementsRequestBody;
    }

    protected function hasClientV1StatementsRequestBody(): bool
    {
        return isset($this->ClientV1StatementsRequestBody);
    }

    protected function unsetClientV1StatementsRequestBody(): self
    {
        if (!$this->hasClientV1StatementsRequestBody()) {
            throw new LogicException('ClientV1StatementsRequestBody is not set.');
        }
        unset($this->ClientV1StatementsRequestBody);

        return $this;
    }
}
