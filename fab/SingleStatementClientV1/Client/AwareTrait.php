<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\Client;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\ClientInterface;

trait AwareTrait
{
    protected $SingleStatementClientV1Client;

    public function setSingleStatementClientV1Client(ClientInterface $Client): self
    {
        if ($this->hasSingleStatementClientV1Client()) {
            throw new LogicException('SingleStatementClientV1Client is already set.');
        }
        $this->SingleStatementClientV1Client = $Client;

        return $this;
    }

    protected function getSingleStatementClientV1Client(): ClientInterface
    {
        if (!$this->hasSingleStatementClientV1Client()) {
            throw new LogicException('SingleStatementClientV1Client is not set.');
        }

        return $this->SingleStatementClientV1Client;
    }

    protected function hasSingleStatementClientV1Client(): bool
    {
        return isset($this->SingleStatementClientV1Client);
    }

    protected function unsetSingleStatementClientV1Client(): self
    {
        if (!$this->hasSingleStatementClientV1Client()) {
            throw new LogicException('SingleStatementClientV1Client is not set.');
        }
        unset($this->SingleStatementClientV1Client);

        return $this;
    }
}
