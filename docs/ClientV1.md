# ClientV1

All [Snowflake SQL API](https://docs.snowflake.com/en/developer-guide/sql-api/index) endpoints follow a pattern. The request and response structure is identical.

The `Neighborhoods\SnowflakeSqlApiComponent\ClientV1` namespace contains a low level client implementation. `ClientV1\StatementsRequest` and `ClientV1\ResultSet` closely follow the documentation. The `ClientV1\StatementsRequest` provides all available request options. The `ClientV1\ResultSet` provides all the response information.

The `ClientV1\Client` makes the API call for a given `ClientV1\StatementsRequest` and returns a `ClientV1\ResultSet`. To do so the `ClientV1\JwtTokenGenerator` must be injected into the `ClientV1\Client` to be able to authenticate.

The `Neighborhoods\SnowflakeSqlApiComponent\ClientV1` namespace provides access to all features, but difficult to use in practice.

Below is a full usage example.

## Build the request

Start by building the `ClientV1\StatementsRequest`.

``` php
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

class Worker
{
    use ClientV1\StatementsRequest\Body\BindVariable\Map\Builder\Factory\AwareTrait;
    use ClientV1\StatementsRequest\Body\Factory\AwareTrait;
    use ClientV1\StatementsRequest\Factory\AwareTrait;
    use ClientV1\StatementsRequest\QueryParameters\Factory\AwareTrait;
    
    public function buildHelloWorldRequest(): ClientV1\StatementsRequestInterface
    {
        $request = $this->getClientV1StatementsRequestFactory()->create();
        // method and path are required
        $request->setMethod('POST');
        $request->setPath('/api/v2/statements');
        // query parameters are optional on this particular endpoint
        $request->setQueryParameters(
            $this->getClientV1StatementsRequestQueryParametersFactory()
                ->create()
                ->setPartition(0)
        );
        // Body is required on this particular endpoint
        $body = $this->getClientV1StatementsRequestBodyFactory()
            ->create()
            ->setStatement("SELECT CONCAT('Hello ', ?)");
        // Bindings are optional
        $body->setBindings(
            $this->getClientV1StatementsRequestBodyBindVariableMapBuilderFactory()
                ->create()
                ->setValues(['World'])
                ->build()
        );
        $request->setBody($body);
        // Do not set the Header. That will be set by added by the Client
        return $request;
    }
}
```

## Make API call with authentication

Make the API call.

``` php
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

class Worker
{
    use ClientV1\Client\AwareTrait;
    
    // call this method once before making any api calls
    // preferably using DI
    public build configureJwtTokenGenerator(): void
    {
        $jwtTokenGenerator = (new ClientV1\JwtTokenGenerator())
            ->setAccount('snowflake_account')
            ->setUser('snowflake_user')
            ->setPrivateKey(file_get_contents('/home/path/snowflake_private_key.pem'));
        $this->getClientV1Client()
            ->setClientV1JwtTokenGenerator($jwtTokenGenerator);
    }
    
    public function callApi(ClientV1\StatementsRequestInterface $request): ClientV1\ResultSetInterface
    {
        $resultSet = $this->getClientV1Client()->authorizeAndSend($request);
        return $resultSet;
    }
}
```

## Handle the result

Handle the result. Notably `ClientV1\ResultSet` contains the values as text. The `ClientV1\ResultSet\DataCaster` should be used to convert the values to the equivalent data type in PHP.

``` php
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;

class Worker
{
    use ClientV1\ResultSet\DataCaster\Factory\AwareTrait;
    
    public function displayResult(ClientV1\ResultSetInterface $result): void
    {
        $ongoing = ($result->getHttpStatusCode() === 202);
        echo $ongoing ? 'Statement did not finish' : 'Statement finished';
        echo PHP_EOL;
        if ($result->hasStatementHandles()) {
           echo 'Mutliple handles since multiple statements were submitted' . PHP_EOL;
           foreach ($result->getStatementHandles() as $handle) {
               echo $handle . PHP_EOL;
           }
           echo 'Use GET /api/v2/statements/{handle endpoint} for each individually' . PHP_EOL;
           return;
        }
        echo 'Statement handle is ' . $result->getStatementHandle() . PHP_EOL;
        if ($ongoing) {
            echo 'Use GET /api/v2/statements/{handle} after a while' . PHP_EOL;
        } else {
            echo 'Number of pages is ' . count($result->getResultSetMetaData()->getPartitionInfo()) . PHP_EOL;
            echo 'Use GET /api/v2/statements/{handle} until you get to the last page' . PHP_EOL;
            $currentPageData = $this->getClientV1ResultSetDataCasterFactory()
                ->create()
                ->setRows($result->getData())
                ->setClientV1ResultSetResultSetMetaDataRowTypeMap($result->getResultSetMetaData()->getRowType())
                ->cast();
            echo 'Casted current page data is present below.' . PHP_EOL;
            var_dump($currentPageData);
        }
    }
}
```

## Use Dependency injection

Inject all the dependencies into the services using this package. Also call the `configureJwtTokenGenerator` method.

``` yaml
services:
  Worker:
    class: Worker
    public: false
    shared: true
    calls:
      - [setClientV1Client, ['@Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ClientInterface']]
      - [setClientV1ResultSetDataCasterFactory, ['@Neighborhoods\SnowflakeSqlApiComponent\ClientV1\ResultSet\DataCaster\FactoryInterface']]
      - [setClientV1StatementsRequestBodyBindVariableMapBuilderFactory, ['@Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\BindVariable\Map\Builder\FactoryInterface']]
      - [setClientV1StatementsRequestBodyFactory, ['@Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\Body\FactoryInterface']]
      - [setClientV1StatementsRequestFactory, ['@Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\FactoryInterface']]
      - [setClientV1StatementsRequestQueryParametersFactory, ['@Neighborhoods\SnowflakeSqlApiComponent\ClientV1\StatementsRequest\QueryParameters\FactoryInterface']]
      - [configureJwtTokenGenerator]

```

Build a container providing the service. Below [DICBC](https://github.com/neighborhoods/DependencyInjectionContainerBuilderComponent) was used. 

``` php
use Neighborhoods\DependencyInjectionContainerBuilderComponent\TinyContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\AnalyzeServiceReferencesPass;
use Symfony\Component\DependencyInjection\Compiler\InlineServiceDefinitionsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = (new TinyContainerBuilder())
    ->setContainerBuilder(new ContainerBuilder())
    ->setRootPath(realpath(dirname(__DIR__, 0))) // update the level fo the root path
    ->addSourcePath('WorkerServiceForlder')
    ->addSourcePath('vendor/neighborhoods/snowflake-sql-api-component/fab/ClientV1')
    ->addSourcePath('vendor/neighborhoods/snowflake-sql-api-component/src/ClientV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/fab/ThrowableDiagnosticV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/src/ThrowableDiagnosticV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/fab/ThrowableDiagnosticV1Decorators/GuzzleV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/src/ThrowableDiagnosticV1Decorators/GuzzleV1')
    ->addCompilerPass(new AnalyzeServiceReferencesPass())
    ->addCompilerPass(new InlineServiceDefinitionsPass())
    ->makeAllPublic()
    ->build();
/** @var Worker $worker */
$worker = $container->get(Worker::class);
```

## Bring it all together

Finally, all the pieces are ready.

``` php
$worker->displayResult(
    $worker->callApi(
        $worker->buildHelloWorldRequest()
    )
);
```

The output looks as follows

```
Statement finished
Statement handle is 01c2f724-0004-c079-0001-d91213955092
Number of pages is 1
Use GET /api/v2/statements/{handle} until you get to the last page
Casted current page data is present below.
array(1) {
  [0]=>
  array(1) {
    ["CONCAT('HELLO ', ?)"]=>
    string(11) "Hello World"
  }
}
```

In this example the statement finished right away and all the data fit on the first page.

## Single Statement Client V1

In practice, there is often just one statement being executed.
Often all the pages are needed to process the data.
Furthermore, if a failure occurs while processing the result set, the statement should be canceled.
All of that can be accomplished much easier using the [SingleStatementClientV1](../README.md#single-statement-client-v1).

More examples can be found in the [Fitness](https://github.com/neighborhoods/SnowflakeSqlApiComponentFitness) project. The code snippets shared here are part of the SingleSelectStatement example.
