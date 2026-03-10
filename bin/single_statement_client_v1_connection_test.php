<?php

declare(strict_types=1);

ini_set('assert.exception', '1');
error_reporting(E_ALL);

if (file_exists($autoloaderFilePath = dirname(__DIR__, 4) . '/autoload.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once $autoloaderFilePath;
    $rootPath = realpath(dirname(__DIR__, 4));
    $componentPath = 'vendor/neighborhoods/snowfalke-sql-api-component';
} elseif (file_exists($autoloaderFilePath = dirname(__DIR__, 1) . '/vendor/autoload.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once $autoloaderFilePath;
    $rootPath = realpath(dirname(__DIR__, 1));
    $componentPath = '.';
} else {
    throw new RuntimeException('Unable to find the Composer autoloader.');
}
if ($rootPath === false) {
    throw new RuntimeException('Absolute path of the root directory not found.');
}

use Neighborhoods\DependencyInjectionContainerBuilderComponent\TinyContainerBuilder;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;
use Symfony\Component\DependencyInjection\Compiler\AnalyzeServiceReferencesPass;
use Symfony\Component\DependencyInjection\Compiler\InlineServiceDefinitionsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/** @var array<string,string>|false $arguments */
$arguments = getopt('', [
    "account:",
    "user:",
    "private-key-file:",
]);
if (
    $arguments === false
    || empty($arguments['account'])
    || empty($arguments['user'])
    || empty($arguments['private-key-file'])
) {
    // print help
    echo 'Usage ' . $argv[0];
    echo ' --account snowflake_account';
    echo ' --user snowflake_user';
    echo ' --private-key-file ~/path/snowflake_private_key.pem' . PHP_EOL;
    exit(1);
}

if (!file_exists($arguments['private-key-file'])) {
    echo 'Private key file ' . $arguments['private-key-file']
        . ' does not exist.' . PHP_EOL;
    exit(2);
}
$privateKey = file_get_contents($arguments['private-key-file']);
if ($privateKey === false) {
    echo 'Failed to read private key file ' . $arguments['private-key-file'] . PHP_EOL;
    exit(2);
}

$jwtTokenGenerator = (new ClientV1\JwtTokenGenerator())
    ->setAccount($arguments['account'])
    ->setUser($arguments['user'])
    ->setPrivateKey($privateKey);

/** @var Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1\ClientInterface $client */
$client = (new TinyContainerBuilder())
    ->setContainerBuilder(new ContainerBuilder())
    ->setRootPath($rootPath)
    ->addSourcePath($componentPath . '/fab')
    ->addSourcePath($componentPath . '/src')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/fab/ThrowableDiagnosticV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/src/ThrowableDiagnosticV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/fab/ThrowableDiagnosticV1Decorators/GuzzleV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/src/ThrowableDiagnosticV1Decorators/GuzzleV1')
    ->addCompilerPass(new AnalyzeServiceReferencesPass())
    ->addCompilerPass(new InlineServiceDefinitionsPass())
    ->makePublic(SingleStatementClientV1\ClientInterface::class)
    ->build()
    ->get(SingleStatementClientV1\ClientInterface::class);

$client->setClientV1JwtTokenGenerator($jwtTokenGenerator);

$query = "SELECT 'Hello World'";
echo 'Executing query "' . $query . '"' . PHP_EOL;
$rows = $client->execute($query);

echo 'Response row count: ' . count($rows) . PHP_EOL;
foreach ($rows as $columns) {
    echo 'Column count in row: ' . count($columns) . PHP_EOL;
    var_dump($columns);
}

echo 'Connection test passed!' . PHP_EOL;
