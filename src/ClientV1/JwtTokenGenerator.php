<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

class JwtTokenGenerator implements JwtTokenGeneratorInterface
{
    /** @var string */
    private $account;

    /** @var string */
    private $user;

    /** @var string */
    private $privateKey;

    public function getAccount(): string
    {
        if ($this->account === null) {
            throw new \LogicException('account has not been set');
        }

        return $this->account;
    }

    public function setAccount(string $account): JwtTokenGeneratorInterface
    {
        if ($this->account !== null) {
            throw new \LogicException('account has already been set');
        }

        $this->account = $account;
        return $this;
    }

    public function hasAccount(): bool
    {
        return $this->account !== null;
    }


    public function getUser(): string
    {
        if ($this->user === null) {
            throw new \LogicException('user has not been set');
        }

        return $this->user;
    }

    public function setUser(string $user): JwtTokenGeneratorInterface
    {
        if ($this->user !== null) {
            throw new \LogicException('user has already been set');
        }

        $this->user = $user;
        return $this;
    }

    public function hasUser(): bool
    {
        return $this->user !== null;
    }


    public function getPrivateKey(): string
    {
        if ($this->privateKey === null) {
            throw new \LogicException('privateKey has not been set');
        }

        return $this->privateKey;
    }

    public function setPrivateKey(string $privateKey): JwtTokenGeneratorInterface
    {
        if ($this->privateKey !== null) {
            throw new \LogicException('privateKey has already been set');
        }

        $this->privateKey = $privateKey;
        return $this;
    }

    public function hasPrivateKey(): bool
    {
        return $this->privateKey !== null;
    }

    public function generateJWT(): string
    {
        // Read the private key
        $privateKey = openssl_pkey_get_private($this->getPrivateKey());

        if (!$privateKey) {
            throw new \Exception("Failed to read private key: " . openssl_error_string());
        }

        // Get public key fingerprint
        $privateKeyDetails = openssl_pkey_get_details($privateKey);
        if ($privateKeyDetails === false) {
            throw new \Exception("Failed to get private key details: " . openssl_error_string());
        }
        $publicKey = $privateKeyDetails['key'];
        $publicKeyDer = $this->exportPublicKeyToDER($publicKey);
        $publicKeyFp = 'SHA256:' . base64_encode(hash('sha256', $publicKeyDer, true));

        // Prepare qualified username (account.user format)
        $qualifiedUsername = strtoupper($this->getAccount()) . '.' . strtoupper($this->getUser());

        // JWT Header
        $header = [
            'alg' => 'RS256',
            'typ' => 'JWT'
        ];

        // JWT Payload
        $issuedAt = time();
        $expiration = $issuedAt + 3600; // Token valid for 1 hour

        $payload = [
            'iss' => $qualifiedUsername . '.' . $publicKeyFp,
            'sub' => $qualifiedUsername,
            'iat' => $issuedAt,
            'exp' => $expiration,
            'aud' => 'snowflake'
        ];

        // Encode Header and Payload
        $base64UrlHeader = $this->base64UrlEncode(json_encode($header, JSON_THROW_ON_ERROR));
        $base64UrlPayload = $this->base64UrlEncode(json_encode($payload, JSON_THROW_ON_ERROR));

        // Create signature
        $signatureInput = $base64UrlHeader . '.' . $base64UrlPayload;
        openssl_sign($signatureInput, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        $base64UrlSignature = $this->base64UrlEncode($signature);

        // Create JWT
        $jwt = $signatureInput . '.' . $base64UrlSignature;

        return $jwt;
    }

    /**
     * Export public key to DER format
     */
    private function exportPublicKeyToDER(string $publicKeyPem): string
    {
        // Remove PEM header/footer and decode
        $publicKeyPem = str_replace(
            ['-----BEGIN PUBLIC KEY-----', '-----END PUBLIC KEY-----', "\n", "\r"],
            '',
            $publicKeyPem
        );
        return base64_decode($publicKeyPem);
    }

    /**
     * Base64 URL encode
     */
    private function base64UrlEncode(string $data): string
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
}
