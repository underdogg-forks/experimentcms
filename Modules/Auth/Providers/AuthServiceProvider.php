<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
//use Modules\Auth\Contracts\Authentication;
use Modules\Auth\Models\UserToken;
use Modules\Auth\Http\Middleware\AuthorisedApiToken;
use Modules\Auth\Http\Middleware\AuthorisedApiTokenAdmin;
use Modules\Auth\Http\Middleware\GuestMiddleware;
use Modules\Auth\Http\Middleware\LoggedInMiddleware;
use Modules\Auth\Http\Middleware\TokenCan;
use Modules\Auth\Repositories\Cache\CacheUserTokenDecorator;
use Modules\Auth\Repositories\Eloquent\EloquentUserTokenRepository;
use Modules\Auth\Repositories\RoleRepository;
use Modules\Auth\Repositories\UserRepository;
use Modules\Auth\Repositories\UserTokenRepository;

class AuthServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * @var array
     */
    protected $middleware = [
        //'auth.guest' => GuestMiddleware::class,
        'logged.in' => LoggedInMiddleware::class,
        'api.token' => AuthorisedApiToken::class,
        'api.token.admin' => AuthorisedApiTokenAdmin::class,
        'token-can' => TokenCan::class,
    ];


    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        //$this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('auth.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'auth'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = base_path('resources/views/modules/auth');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/auth';
        }, \Config::get('view.paths')), [$sourcePath]), 'auth');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = base_path('resources/lang/modules/auth');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'auth');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'auth');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }


    private function registerBindings()
    {
        //$driver = config('asgard.user.config.driver', 'Sentinel');
    }

    private function registerMiddleware()
    {
        foreach ($this->middleware as $name => $class) {
            $this->app['router']->middleware($name, $class);
        }
    }



}
