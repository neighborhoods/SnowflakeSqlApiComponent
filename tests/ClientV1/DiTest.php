<?php

declare(strict_types=1);

namespace Neighborhoods\SnowflakeSqlApiComponent\Tests\ClientV1;

use Neighborhoods\DependencyInjectionContainerBuilderComponent\TinyContainerBuilder;
use Neighborhoods\SnowflakeSqlApiComponent\ClientV1;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use Symfony\Component\DependencyInjection\Compiler\AnalyzeServiceReferencesPass;
use Symfony\Component\DependencyInjection\Compiler\InlineServiceDefinitionsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DiTest extends TestCase
{
    /**
     * @test
     */
    public function testDi(): void
    {
        $rootPath = realpath(dirname(__DIR__, 2));
        if ($rootPath === false) {
            throw new RuntimeException('Absolute path of the root directory not found.');
        }
        $tdcPath = 'vendor/neighborhoods/throwable-diagnostic-component';
        $container = (new TinyContainerBuilder())
            ->setContainerBuilder(new ContainerBuilder())
            ->setRootPath($rootPath)
            ->addSourcePath('fab/ClientV1')
            ->addSourcePath('src/ClientV1')
            ->addSourcePath($tdcPath . '/fab/ThrowableDiagnosticV1')
            ->addSourcePath($tdcPath . '/src/ThrowableDiagnosticV1')
            ->addSourcePath($tdcPath . '/fab/ThrowableDiagnosticV1Decorators/GuzzleV1')
            ->addSourcePath($tdcPath . '/src/ThrowableDiagnosticV1Decorators/GuzzleV1')
            ->addCompilerPass(new AnalyzeServiceReferencesPass())
            ->addCompilerPass(new InlineServiceDefinitionsPass())
            ->makeAllPublic()
            ->build();
        Assert::assertNotNull($container->get(ClientV1\ClientInterface::class));
        Assert::assertNotNull($container->get(ClientV1\StatementsRequest\FactoryInterface::class));
    }
}
