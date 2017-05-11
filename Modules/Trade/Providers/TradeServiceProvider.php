<?php

namespace Modules\Trade\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class TradeServiceProvider extends ServiceProvider
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
        $this->publishConfig('trade', 'permissions');
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
            'Modules\Trade\Repositories\SalesOrderRepository',
            function () {
                $repository = new \Modules\Trade\Repositories\Eloquent\EloquentSalesOrderRepository(new \Modules\Trade\Entities\SalesOrder());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Trade\Repositories\Cache\CacheSalesOrderDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Trade\Repositories\PurchaseOrderRepository',
            function () {
                $repository = new \Modules\Trade\Repositories\Eloquent\EloquentPurchaseOrderRepository(new \Modules\Trade\Entities\PurchaseOrder());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Trade\Repositories\Cache\CachePurchaseOrderDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Trade\Repositories\ProductRepository',
            function () {
                $repository = new \Modules\Trade\Repositories\Eloquent\EloquentProductRepository(new \Modules\Trade\Entities\Product());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Trade\Repositories\Cache\CacheProductDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Trade\Repositories\ProductCategoryRepository',
            function () {
                $repository = new \Modules\Trade\Repositories\Eloquent\EloquentProductCategoryRepository(new \Modules\Trade\Entities\ProductCategory());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Trade\Repositories\Cache\CacheProductCategoryDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Trade\Repositories\ProductTypeRepository',
            function () {
                $repository = new \Modules\Trade\Repositories\Eloquent\EloquentProductTypeRepository(new \Modules\Trade\Entities\ProductType());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Trade\Repositories\Cache\CacheProductTypeDecorator($repository);
            }
        );
// add bindings





    }
}
