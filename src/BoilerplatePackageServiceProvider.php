<?php

namespace JoeriAbbo\Boilerplate;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use JoeriAbbo\Boilerplate\Console\Commands\Installer;

class BoilerplatePackageServiceProvider extends ServiceProvider
{
    const PACKAGE_NAME = 'boilerplate';

    /**
     * Get migrations
     * @return array
     */
    private function getMigrations(): array
    {
        $items = [];
        $migrations = array_diff(scandir(__DIR__ . '/../database/migrations'), ['.', '..']);

        foreach ($migrations as $migration) {
            $items[sprintf(__DIR__ . '/../database/migrations/%s', $migration)] = sprintf(database_path('migrations/%s'), $migration);
        }

        return $items;
    }

    public function register()
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            // Add configs
            $this->publishes($this->getMigrations(), /**/ 'migrations');

            $this->publishes([__DIR__ . '/../config/config.php' => config_path(self::PACKAGE_NAME . '.php'),], 'config');

            Route::group([], function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });

            $this->loadViewsFrom(__DIR__ . '/../resources/views', self::PACKAGE_NAME);
        }
        $this->commands([
            Installer::class,
        ]);
    }
}
