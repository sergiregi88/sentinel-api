<?php namespace Maburdenjr\SentinelApi;

use Illuminate\Support\ServiceProvider;

class SentinelApiServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . 'routes.php';

    }

}