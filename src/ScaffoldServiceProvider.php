<?php

namespace Scaffold;

use Illuminate\Support\ServiceProvider;

class ScaffoldServiceProvider extends ServiceProvider
{
    protected $providers = [
        \Scaffold\Providers\RouteServiceProvider::class,
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }

        $this->loadViewsFrom(realpath(__DIR__.'/../resources/views'), 'scaffold');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
