<?php

namespace ElveCz\MysqlToElasticSearch\Integrations\Laravel;

use ElveCz\MysqlToElasticSearch\Infrastructure\Commands\MakeMappingCommand;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Symfony\Component\Console\Application;

class MysqlToElasticSearchProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->getContainer()
            ->share(
                Application::class,
                function () {
                    $app = new Application();
                    $app->add(
                        MakeMappingCommand::class
                    );
                    return $app;
                }
            );
    }
}