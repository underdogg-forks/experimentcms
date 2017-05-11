<?php

namespace Modules\Relations\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class RelationsServiceProvider extends ServiceProvider
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
        $this->publishConfig('relations', 'permissions');
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
            'Modules\Relations\Repositories\RelationRepository',
            function () {
                $repository = new \Modules\Relations\Repositories\Eloquent\EloquentRelationRepository(new \Modules\Relations\Models\Relation());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Relations\Repositories\Cache\CacheRelationDecorator($repository);
            }
        );
// add bindings

    }
}
