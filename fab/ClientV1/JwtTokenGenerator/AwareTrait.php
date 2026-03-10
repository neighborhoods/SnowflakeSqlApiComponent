<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGenerator;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface;

trait AwareTrait
{
    protected $ClientV1JwtTokenGenerator;

    public function setClientV1JwtTokenGenerator(JwtTokenGeneratorInterface $JwtTokenGenerator): self
    {
        if ($this->hasClientV1JwtTokenGenerator()) {
            throw new LogicException('ClientV1JwtTokenGenerator is already set.');
        }
        $this->ClientV1JwtTokenGenerator = $JwtTokenGenerator;

        return $this;
    }

    protected function getClientV1JwtTokenGenerator(): JwtTokenGeneratorInterface
    {
        if (!$this->hasClientV1JwtTokenGenerator()) {
            throw new LogicException('ClientV1JwtTokenGenerator is not set.');
        }

        return $this->ClientV1JwtTokenGenerator;
    }

    protected function hasClientV1JwtTokenGenerator(): bool
    {
        return isset($this->ClientV1JwtTokenGenerator);
    }

    protected function unsetClientV1JwtTokenGenerator(): self
    {
        if (!$this->hasClientV1JwtTokenGenerator()) {
            throw new LogicException('ClientV1JwtTokenGenerator is not set.');
        }
        unset($this->ClientV1JwtTokenGenerator);

        return $this;
    }
}
