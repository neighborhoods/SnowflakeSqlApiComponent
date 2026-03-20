<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

interface JwtTokenGeneratorInterface
{
    public function getAccount(): string;
    public function setAccount(string $account): JwtTokenGeneratorInterface;
    public function hasAccount(): bool;

    public function getUser(): string;
    public function setUser(string $user): JwtTokenGeneratorInterface;
    public function hasUser(): bool;

    public function getPrivateKey(): string;
    public function setPrivateKey(string $privateKey): JwtTokenGeneratorInterface;
    public function hasPrivateKey(): bool;

    public function generateJWT(): string;
}
