<?php

namespace Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

use Generator;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

interface ClientInterface
{
    public function setClientV1JwtTokenGenerator(
        ClientV1\JwtTokenGeneratorInterface $jwtTokenGenerator
    ): ClientInterface;

    public function executePaginated(
        string $statement,
        ?array $bindingVariables = null
    ): Generator;

    public function execute(
        string $statement,
        ?array $bindingVariables = null
    ): array;
}
