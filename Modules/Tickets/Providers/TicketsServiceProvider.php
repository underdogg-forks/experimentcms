<?php

namespace Modules\Tickets\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class TicketsServiceProvider extends ServiceProvider
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
        $this->publishConfig('tickets', 'permissions');
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
            'Modules\Tickets\Repositories\TicketRepository',
            function () {
                $repository = new \Modules\Tickets\Repositories\Eloquent\EloquentTicketRepository(new \Modules\Tickets\Entities\Ticket());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tickets\Repositories\Cache\CacheTicketDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tickets\Repositories\TicketThreadRepository',
            function () {
                $repository = new \Modules\Tickets\Repositories\Eloquent\EloquentTicketThreadRepository(new \Modules\Tickets\Entities\TicketThread());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tickets\Repositories\Cache\CacheTicketThreadDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tickets\Repositories\TicketTypeRepository',
            function () {
                $repository = new \Modules\Tickets\Repositories\Eloquent\EloquentTicketTypeRepository(new \Modules\Tickets\Entities\TicketType());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tickets\Repositories\Cache\CacheTicketTypeDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tickets\Repositories\TicketStatusRepository',
            function () {
                $repository = new \Modules\Tickets\Repositories\Eloquent\EloquentTicketStatusRepository(new \Modules\Tickets\Entities\TicketStatus());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tickets\Repositories\Cache\CacheTicketStatusDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tickets\Repositories\TicketPriorityRepository',
            function () {
                $repository = new \Modules\Tickets\Repositories\Eloquent\EloquentTicketPriorityRepository(new \Modules\Tickets\Entities\TicketPriority());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tickets\Repositories\Cache\CacheTicketPriorityDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tickets\Repositories\TicketSourceRepository',
            function () {
                $repository = new \Modules\Tickets\Repositories\Eloquent\EloquentTicketSourceRepository(new \Modules\Tickets\Entities\TicketSource());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tickets\Repositories\Cache\CacheTicketSourceDecorator($repository);
            }
        );
// add bindings






    }
}
