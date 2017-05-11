<?php

namespace Modules\Leads\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class LeadsServiceProvider extends ServiceProvider
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
        $this->publishConfig('leads', 'permissions');
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
            'Modules\Leads\Repositories\LeadRepository',
            function () {
                $repository = new \Modules\Leads\Repositories\Eloquent\EloquentLeadRepository(new \Modules\Leads\Entities\Lead());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Leads\Repositories\Cache\CacheLeadDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Leads\Repositories\LeadStatusRepository',
            function () {
                $repository = new \Modules\Leads\Repositories\Eloquent\EloquentLeadStatusRepository(new \Modules\Leads\Entities\LeadStatus());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Leads\Repositories\Cache\CacheLeadStatusDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Leads\Repositories\LeadSourceRepository',
            function () {
                $repository = new \Modules\Leads\Repositories\Eloquent\EloquentLeadSourceRepository(new \Modules\Leads\Entities\LeadSource());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Leads\Repositories\Cache\CacheLeadSourceDecorator($repository);
            }
        );
// add bindings



    }
}
