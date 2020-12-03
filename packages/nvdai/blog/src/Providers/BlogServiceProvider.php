<?php

namespace Nvdai\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $packageDir = dirname(__DIR__, 2);

        $this->loadMigrationsFrom($packageDir . '/database/migrations');

        $this->loadViewsFrom($packageDir . '/resources/views', 'blog');

        $this->loadRoutesFrom($packageDir . '/routes/web.php');

        $this->publishes([
            $packageDir . '/resources/js' => public_path('nvdai/blog/js'),
            $packageDir . '/resources/css' => public_path('nvdai/blog/css'),
        ], 'public');
    }
}
