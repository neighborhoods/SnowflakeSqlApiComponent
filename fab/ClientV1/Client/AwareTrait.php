<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Client;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ClientInterface;

trait AwareTrait
{
    protected $ClientV1Client;

    public function setClientV1Client(ClientInterface $Client): self
    {
        if ($this->hasClientV1Client()) {
            throw new LogicException('ClientV1Client is already set.');
        }
        $this->ClientV1Client = $Client;

        return $this;
    }

    protected function getClientV1Client(): ClientInterface
    {
        if (!$this->hasClientV1Client()) {
            throw new LogicException('ClientV1Client is not set.');
        }

        return $this->ClientV1Client;
    }

    protected function hasClientV1Client(): bool
    {
        return isset($this->ClientV1Client);
    }

    protected function unsetClientV1Client(): self
    {
        if (!$this->hasClientV1Client()) {
            throw new LogicException('ClientV1Client is not set.');
        }
        unset($this->ClientV1Client);

        return $this;
    }
}
