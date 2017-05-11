<?php

namespace Modules\Prospects\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class ProspectsServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    public function boot()
    {
        $this->publishConfig('prospects', 'permissions');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Prospects\Repositories\ProspectRepository',
            function () {
                $repository = new \Modules\Prospects\Repositories\Eloquent\EloquentProspectRepository(new \Modules\Prospects\Entities\Prospect());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Prospects\Repositories\Cache\CacheProspectDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Prospects\Repositories\ProspectStatusRepository',
            function () {
                $repository = new \Modules\Prospects\Repositories\Eloquent\EloquentProspectStatusRepository(new \Modules\Prospects\Entities\ProspectStatus());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Prospects\Repositories\Cache\CacheProspectStatusDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Prospects\Repositories\ProspectSourceRepository',
            function () {
                $repository = new \Modules\Prospects\Repositories\Eloquent\EloquentProspectSourceRepository(new \Modules\Prospects\Entities\ProspectSource());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Prospects\Repositories\Cache\CacheProspectSourceDecorator($repository);
            }
        );
// add bindings



    }
}
