<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Client\ThrowableDiagnostic;

use Neighborhoods\SnowflakeSqlApiComponent\ClientV1\Exception\UnauthorizedException;
use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnosticV1\ThrowableDiagnostic;
use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnosticV1\ThrowableDiagnosticInterface;
use GuzzleHttp\Exception\BadResponseException;
use Throwable;

final class Decorator implements DecoratorInterface
{
    use ThrowableDiagnostic\AwareTrait;

    public function diagnose(Throwable $throwable): ThrowableDiagnosticInterface
    {
        if ($throwable instanceof BadResponseException) {
            $response = $throwable->getResponse();
            //If its an auth error convert to an auth exception
            if ($response->getStatusCode() === 401) {
                $contents = (string)$response->getBody()->getContents();
                $errors = json_decode($contents, true);
                throw new UnauthorizedException($errors['message'], (int)$errors['code']);
            }
        }

        $this->getThrowableDiagnosticV1ThrowableDiagnostic()->diagnose($throwable);

        return $this;
    }
}
