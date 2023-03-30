<?php

namespace gjsbrt\NetBox;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/netbox.php' => config_path('netbox.php')
        ], 'config');
        \Auth::provider('netbox', function ($app, array $config) {
            return new \gjsbrt\NetBox\Providers\NetBoxProvider();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['gjsbrt\NetBox\NetBox', 'NetBox'];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('gjsbrt\NetBox\NetBox', function ($app) {
            $netBox = new NetBox($app);
            $netBox->site($netBox->getDefaultSite());

            return $netBox;
        });
        $this->app->alias('gjsbrt\NetBox\NetBox', 'NetBox');
    }
}
