# Snowfalke SQL API Component

A Client Component for [Snowflake SQL API](https://docs.snowflake.com/en/developer-guide/sql-api/index).

## Install

Via Composer

``` bash
$ composer require neighborhoods/snowfalke-sql-api-component
```

## Usage

This package offers two ways for interacting with the Snowflake SQL API.
* [Client V1](#client-v1), which is low level client implementation.
* [Single Statement Client V1](#single-statement-client-v1), which is a higher level client implementation. It's much simpler to use, but does not provide access to all the features offered by the API.

Both implementations use the same [Authentication](#authentication), which is an essential part of Client V1.

### Authentication

At the moment only [key-pair authentication](https://docs.snowflake.com/en/developer-guide/sql-api/authenticating#label-sql-api-authenticating-key-pair) is supported.

Key-pair authentication is handled by the `ClientV1\JwtTokenGenerator`. Configure the `JwtTokenGenerator` by setting the Account, User and Private Key as shown below.

``` php
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

$jwtTokenGenerator = (new ClientV1\JwtTokenGenerator())
    ->setAccount('snowflake_account')
    ->setUser('snowflake_user')
    ->setPrivateKey(file_get_contents('~/path/snowflake_private_key.pem'));
```

This can also be done by defining a Symfony DI service using environment variables.

``` yml
#YourProjectPath/src/Vendor/SnowflakeSqlApiComponent/ClientV1/JwtTokenGenerator.service.yml
parameters:
  Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface.account: '%env(SNOWFLAKE_ACCOUNT)%'
  Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface.user: '%env(SNOWFLAKE_USER)%'
  Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface.privateKey: '%env(SNOWFLAKE_PRIVATE_KEY)%'
services:
  Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface:
    class: Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGenerator
    public: false
    shared: true
    calls:
      - [setAccount, ['%Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface.account%']]
      - [setUser, ['%Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface.user%']]
      - [setPrivateKey, ['%Neighborhoods\SnowflakeSqlApiComponent\ClientV1\JwtTokenGeneratorInterface.privateKey%']]
```

### Client V1

The `Neighborhoods\SnowflakeSqlApiComponent\ClientV1` namespace contains a low level client implementation. While it allows using all the features of the Snowflake SQL API, using it is challenging. Often the simpler [Single Statement Client V1](#single-statement-client-v1) can be used instead.
More information about the Client V1 is available [here](./docs/ClientV1.md).

### Single Statement Client V1

The Snowflake SQL API has many useful features which includes.
* Submitting multiple statments at once, possibly in the same transaction.
* The statements might take a long time to execute. If the execution threshold is exceeded the API indicates that the statements are still ongoing. The Client application can check the status later on.
* The results are patritioned/paginated.

While these features are important, in practice the following is encountered:
* There is often just one statement being executed without using transactions.
* The statement is typically lightweight due to which the first page of results is returned right away.

When the above is true, the Single Statement Client V1 can be used. Single Statement Client V1 uses Client V1 under the hood, taking care of building the appropriate API request(s) and error handling.

#### Passing JwtTokenGenerator

The `SingleStatementClientV1\ClientV1Interace` DI service is only missing a configured `ClientV1\JwtTokenGenerator` for [authentication](#authentication).

``` php
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

/** @var SingleStatementClientV1\ClientInterface $client */
$client = $container->get(SingleStatementClientV1\ClientInterface::class);
$client->setClientV1JwtTokenGenerator($jwtTokenGenerator);
```

#### Execute a statement

``` php
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

/** @var SingleStatementClientV1\ClientInterface $client */
$rows = $client->execute("SELECT 'Hello World!' as text_field, 1 as int_field");
foreach ($rows as $row) {
    foreach ($row as $columnName => $columnValue) {
        echo $columnName . ': ' . $columnValue . PHP_EOL;
    }
}
```

The `execute()` method returns all the rows from all the pages. Each row is an associative array. The keys in the row are the column names, while the values are the cell value.

The code above results in the output below. There is only one row returned.
```
TEXT_FIELD: Hello World!
INT_FIELD: 1
```
Notably all the column names are uppercased, because in Snowflake unquoted column names default to uppercase and are treated as case-insensitive.

#### Binding variables

It is possible to pass an array of binding variables as second argument to the `execute()` method.

``` php
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

/** @var SingleStatementClientV1\ClientInterface $client */
$rows = $client->execute("SELECT CONCAT('Hello ', ?, '!') as \"text_field\", ? as \"int_field\"", ['Again', 5]);
foreach ($rows as $row) {
    foreach ($row as $columnName => $columnValue) {
        echo $columnName . ': ' . $columnValue . PHP_EOL;
    }
}
```

The code above results in the output below.

```
text_field: Hello Again!
int_field: 5
```

#### Queries taking too long

If the execution of the statement takes too long, the results won't be returned right away, in which case the statement is canceled and an `OngoingException` is raised.

#### Execute Paginated

For common select queries the volume of the results isn't that big. The `execute()` method combines the data from all the pages, if multiple.

If the statement is expected to produce many pages of data raising concerns on memory consumptions the `executePaginated()` method can be used instead.

``` php
use Neighborhoods\SnowflakeSqlApiComponent\SingleStatementClientV1;

/** @var SingleStatementClientV1\ClientInterface $client */
$generator = $client->executePaginated("
WITH RECURSIVE NumberSequence (n, long_text_field) AS (
  SELECT 1 AS n, 'Lorem ipsum dolor sit amet' as long_text_field
  UNION ALL
  SELECT n + 1, concat(long_text_field, ', Lorem ipsum dolor sit amet') FROM NumberSequence WHERE n < 100000 
)
SELECT n FROM NumberSequence ORDER BY n");

foreach ($generator as $page) {
    echo 'Page starts with ' . $page[0]['N'] . ' and ends with ' . end($page)['N'] . PHP_EOL;
}
```

The code above results in the output below.

```
Page starts with 1 and ends with 12288
Page starts with 12289 and ends with 65536
Page starts with 65537 and ends with 100000
```

#### DI Paths

To build a DI container providing a `SingleStatementClientV1\ClientInterface`, the following paths are needed

```
->addSourcePath('vendor/neighborhoods/snowfalke-sql-api-component/fab')
->addSourcePath('vendor/neighborhoods/snowfalke-sql-api-component/src')
->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/fab/ThrowableDiagnosticV1')
->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/src/ThrowableDiagnosticV1')
->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/fab/ThrowableDiagnosticV1Decorators/GuzzleV1')
->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/src/ThrowableDiagnosticV1Decorators/GuzzleV1')
```

#### Test script

The `vendor/bin/single_statement_client_v1_connection_test` script can be run to build a container providing a `SingleStatementClientV1\ClientInterface` instance. The test script uses [DICBC](https://github.com/neighborhoods/DependencyInjectionContainerBuilderComponent), which isn't a direct dependency of this package. You might need to add it to your development environment.

The `SELECT 'Hello World'` query is executed to test the Snowflake connection. If the credentials are valid, the result will be printed. Run the script for more details.

## Examples

Application examples are available in the [Fitness](https://github.com/neighborhoods/SnowflakeSqlApiComponentFitness) project.