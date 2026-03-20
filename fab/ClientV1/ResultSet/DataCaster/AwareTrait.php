<?php
declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCaster;

use LogicException;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCasterInterface;

trait AwareTrait
{
    protected $ClientV1ResultSetDataCaster;

    public function setClientV1ResultSetDataCaster(DataCasterInterface $DataCaster): self
    {
        if ($this->hasClientV1ResultSetDataCaster()) {
            throw new LogicException('ClientV1ResultSetDataCaster is already set.');
        }
        $this->ClientV1ResultSetDataCaster = $DataCaster;

        return $this;
    }

    protected function getClientV1ResultSetDataCaster(): DataCasterInterface
    {
        if (!$this->hasClientV1ResultSetDataCaster()) {
            throw new LogicException('ClientV1ResultSetDataCaster is not set.');
        }

        return $this->ClientV1ResultSetDataCaster;
    }

    protected function hasClientV1ResultSetDataCaster(): bool
    {
        return isset($this->ClientV1ResultSetDataCaster);
    }

    protected function unsetClientV1ResultSetDataCaster(): self
    {
        if (!$this->hasClientV1ResultSetDataCaster()) {
            throw new LogicException('ClientV1ResultSetDataCaster is not set.');
        }
        unset($this->ClientV1ResultSetDataCaster);

        return $this;
    }
}
