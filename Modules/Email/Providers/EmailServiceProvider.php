<?php

namespace Modules\Email\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class EmailServiceProvider extends ServiceProvider
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
        $this->publishConfig('email', 'permissions');
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
            'Modules\Email\Repositories\MailboxRepository',
            function () {
                $repository = new \Modules\Email\Repositories\Eloquent\EloquentMailboxRepository(new \Modules\Email\Entities\Mailbox());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Email\Repositories\Cache\CacheMailboxDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Email\Repositories\MailBoxTypeRepository',
            function () {
                $repository = new \Modules\Email\Repositories\Eloquent\EloquentMailBoxTypeRepository(new \Modules\Email\Entities\MailBoxType());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Email\Repositories\Cache\CacheMailBoxTypeDecorator($repository);
            }
        );
// add bindings


    }
}
