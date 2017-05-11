<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/trade'], function (Router $router) {
    $router->bind('salesorder', function ($id) {
        return app('Modules\Trade\Repositories\SalesOrderRepository')->find($id);
    });
    $router->get('salesorders', [
        'as' => 'admin.trade.salesorder.index',
        'uses' => 'SalesOrderController@index',
        'middleware' => 'can:trade.salesorders.index'
    ]);
    $router->get('salesorders/create', [
        'as' => 'admin.trade.salesorder.create',
        'uses' => 'SalesOrderController@create',
        'middleware' => 'can:trade.salesorders.create'
    ]);
    $router->post('salesorders', [
        'as' => 'admin.trade.salesorder.store',
        'uses' => 'SalesOrderController@store',
        'middleware' => 'can:trade.salesorders.create'
    ]);
    $router->get('salesorders/{salesorder}/edit', [
        'as' => 'admin.trade.salesorder.edit',
        'uses' => 'SalesOrderController@edit',
        'middleware' => 'can:trade.salesorders.edit'
    ]);
    $router->put('salesorders/{salesorder}', [
        'as' => 'admin.trade.salesorder.update',
        'uses' => 'SalesOrderController@update',
        'middleware' => 'can:trade.salesorders.edit'
    ]);
    $router->delete('salesorders/{salesorder}', [
        'as' => 'admin.trade.salesorder.destroy',
        'uses' => 'SalesOrderController@destroy',
        'middleware' => 'can:trade.salesorders.destroy'
    ]);
    $router->bind('purchaseorder', function ($id) {
        return app('Modules\Trade\Repositories\PurchaseOrderRepository')->find($id);
    });
    $router->get('purchaseorders', [
        'as' => 'admin.trade.purchaseorder.index',
        'uses' => 'PurchaseOrderController@index',
        'middleware' => 'can:trade.purchaseorders.index'
    ]);
    $router->get('purchaseorders/create', [
        'as' => 'admin.trade.purchaseorder.create',
        'uses' => 'PurchaseOrderController@create',
        'middleware' => 'can:trade.purchaseorders.create'
    ]);
    $router->post('purchaseorders', [
        'as' => 'admin.trade.purchaseorder.store',
        'uses' => 'PurchaseOrderController@store',
        'middleware' => 'can:trade.purchaseorders.create'
    ]);
    $router->get('purchaseorders/{purchaseorder}/edit', [
        'as' => 'admin.trade.purchaseorder.edit',
        'uses' => 'PurchaseOrderController@edit',
        'middleware' => 'can:trade.purchaseorders.edit'
    ]);
    $router->put('purchaseorders/{purchaseorder}', [
        'as' => 'admin.trade.purchaseorder.update',
        'uses' => 'PurchaseOrderController@update',
        'middleware' => 'can:trade.purchaseorders.edit'
    ]);
    $router->delete('purchaseorders/{purchaseorder}', [
        'as' => 'admin.trade.purchaseorder.destroy',
        'uses' => 'PurchaseOrderController@destroy',
        'middleware' => 'can:trade.purchaseorders.destroy'
    ]);
    $router->bind('product', function ($id) {
        return app('Modules\Trade\Repositories\ProductRepository')->find($id);
    });
    $router->get('products', [
        'as' => 'admin.trade.product.index',
        'uses' => 'ProductController@index',
        'middleware' => 'can:trade.products.index'
    ]);
    $router->get('products/create', [
        'as' => 'admin.trade.product.create',
        'uses' => 'ProductController@create',
        'middleware' => 'can:trade.products.create'
    ]);
    $router->post('products', [
        'as' => 'admin.trade.product.store',
        'uses' => 'ProductController@store',
        'middleware' => 'can:trade.products.create'
    ]);
    $router->get('products/{product}/edit', [
        'as' => 'admin.trade.product.edit',
        'uses' => 'ProductController@edit',
        'middleware' => 'can:trade.products.edit'
    ]);
    $router->put('products/{product}', [
        'as' => 'admin.trade.product.update',
        'uses' => 'ProductController@update',
        'middleware' => 'can:trade.products.edit'
    ]);
    $router->delete('products/{product}', [
        'as' => 'admin.trade.product.destroy',
        'uses' => 'ProductController@destroy',
        'middleware' => 'can:trade.products.destroy'
    ]);
    $router->bind('productcategory', function ($id) {
        return app('Modules\Trade\Repositories\ProductCategoryRepository')->find($id);
    });
    $router->get('productcategories', [
        'as' => 'admin.trade.productcategory.index',
        'uses' => 'ProductCategoryController@index',
        'middleware' => 'can:trade.productcategories.index'
    ]);
    $router->get('productcategories/create', [
        'as' => 'admin.trade.productcategory.create',
        'uses' => 'ProductCategoryController@create',
        'middleware' => 'can:trade.productcategories.create'
    ]);
    $router->post('productcategories', [
        'as' => 'admin.trade.productcategory.store',
        'uses' => 'ProductCategoryController@store',
        'middleware' => 'can:trade.productcategories.create'
    ]);
    $router->get('productcategories/{productcategory}/edit', [
        'as' => 'admin.trade.productcategory.edit',
        'uses' => 'ProductCategoryController@edit',
        'middleware' => 'can:trade.productcategories.edit'
    ]);
    $router->put('productcategories/{productcategory}', [
        'as' => 'admin.trade.productcategory.update',
        'uses' => 'ProductCategoryController@update',
        'middleware' => 'can:trade.productcategories.edit'
    ]);
    $router->delete('productcategories/{productcategory}', [
        'as' => 'admin.trade.productcategory.destroy',
        'uses' => 'ProductCategoryController@destroy',
        'middleware' => 'can:trade.productcategories.destroy'
    ]);
    $router->bind('producttype', function ($id) {
        return app('Modules\Trade\Repositories\ProductTypeRepository')->find($id);
    });
    $router->get('producttypes', [
        'as' => 'admin.trade.producttype.index',
        'uses' => 'ProductTypeController@index',
        'middleware' => 'can:trade.producttypes.index'
    ]);
    $router->get('producttypes/create', [
        'as' => 'admin.trade.producttype.create',
        'uses' => 'ProductTypeController@create',
        'middleware' => 'can:trade.producttypes.create'
    ]);
    $router->post('producttypes', [
        'as' => 'admin.trade.producttype.store',
        'uses' => 'ProductTypeController@store',
        'middleware' => 'can:trade.producttypes.create'
    ]);
    $router->get('producttypes/{producttype}/edit', [
        'as' => 'admin.trade.producttype.edit',
        'uses' => 'ProductTypeController@edit',
        'middleware' => 'can:trade.producttypes.edit'
    ]);
    $router->put('producttypes/{producttype}', [
        'as' => 'admin.trade.producttype.update',
        'uses' => 'ProductTypeController@update',
        'middleware' => 'can:trade.producttypes.edit'
    ]);
    $router->delete('producttypes/{producttype}', [
        'as' => 'admin.trade.producttype.destroy',
        'uses' => 'ProductTypeController@destroy',
        'middleware' => 'can:trade.producttypes.destroy'
    ]);
// append





});
