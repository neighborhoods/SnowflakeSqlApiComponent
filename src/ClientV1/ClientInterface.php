<?php

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

interface ClientInterface
{
    public function setClientV1JwtTokenGenerator(JwtTokenGeneratorInterface $jwtTokenGenerator): ClientInterface;

    public function authorizeAndSend(
        StatementsRequestInterface $request
    ): ResultSetInterface;
}
