<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCaster\Factory;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCaster\FactoryInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetDataCasterFactory;

    public function setClientV1ResultSetDataCasterFactory(FactoryInterface $DataCasterFactory): self
    {
        if ($this->hasClientV1ResultSetDataCasterFactory()) {
            throw new LogicException('ClientV1ResultSetDataCasterFactory is already set.');
        }
        $this->ClientV1ResultSetDataCasterFactory = $DataCasterFactory;

        return $this;
    }

    protected function getClientV1ResultSetDataCasterFactory(): FactoryInterface
    {
        if (!$this->hasClientV1ResultSetDataCasterFactory()) {
            throw new LogicException('ClientV1ResultSetDataCasterFactory is not set.');
        }

        return $this->ClientV1ResultSetDataCasterFactory;
    }

    protected function hasClientV1ResultSetDataCasterFactory(): bool
    {
        return isset($this->ClientV1ResultSetDataCasterFactory);
    }

    protected function unsetClientV1ResultSetDataCasterFactory(): self
    {
        if (!$this->hasClientV1ResultSetDataCasterFactory()) {
            throw new LogicException('ClientV1ResultSetDataCasterFactory is not set.');
        }
        unset($this->ClientV1ResultSetDataCasterFactory);

        return $this;
    }
}
