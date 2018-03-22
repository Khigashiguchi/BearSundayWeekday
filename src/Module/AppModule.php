<?php
namespace Khigashiguchi\BearSundayWeekday\Module;

use BEAR\Package\PackageModule;
use BEAR\Package\Provide\Router\AuraRouterModule;
use josegonzalez\Dotenv\Loader as Dotenv;
use Ray\Di\AbstractModule;
use Psr\Log\LoggerInterface;
use Ray\Di\Scope;
use Khigashiguchi\BearSundayWeekday\Annotation\BenchMark;
use Khigashiguchi\BearSundayWeekday\Interceptor\BenchMarker;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $appDir = dirname(__DIR__, 2);
        Dotenv::load([
            'filepath' => $appDir . '/.env',
            'toEnv' => true
        ]);
        $this->install(new AuraRouterModule($appDir . '/var/conf/aura.route.php'));
        $this->install(new PackageModule);
        $this->bind(LoggerInterface::class)->toProvider(MonologLoggerProvider::class)->in(Scope::SINGLETON);
        $this->bindInterceptor(
        	$this->matcher->any(),
	        $this->matcher->annotatedWith(BenchMarker::class),
	        [BenchMarker::class]
        );
    }
}
