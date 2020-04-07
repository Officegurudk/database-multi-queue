<?php

namespace Officeguru\Multi;

use Illuminate\Support\ServiceProvider;

class QueueServiceProvider extends ServiceProvider {
    public function boot()
    {
        $manager = $this->app['queue'];

        $manager->addConnector('multi-database', function () {
            return new DatabaseMultiConnector($this->app['db']);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/queue.php', 'queue'
        );
    }
}