<?php namespace Modules\Notifications\Providers;

use Illuminate\Support\ServiceProvider;
//use Modules\Core\Contracts\Authentication;
use Modules\Notifications\Composers\NotificationViewComposer;
use Modules\Notifications\Entities\Notification;
use Modules\Notifications\Repositories\Cache\CacheNotificationDecorator;
use Modules\Notifications\Repositories\Eloquent\EloquentNotificationRepository;
use Modules\Notifications\Repositories\NotificationRepository;
use Modules\Notifications\Services\AsgardNotification;

class NotificationServiceProvider extends ServiceProvider
{
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
        $this->registerViewComposers();
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
        $this->app->bind(NotificationRepository::class, function () {
                $repository = new EloquentNotificationRepository(new Notification());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new CacheNotificationDecorator($repository);
            }
        );

        $this->app->bind(\Modules\Notifications\Services\Notification::class, function ($app) {
            return new AsgardNotification($app[NotificationRepository::class], $app[Authentication::class]);
        });
    }

    private function registerViewComposers()
    {
        view()->composer('partials.top-nav', NotificationViewComposer::class);
    }
}
