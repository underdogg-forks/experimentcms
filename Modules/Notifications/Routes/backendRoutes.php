<?php

use Illuminate\Routing\Router;

/** @var Router $router */


Route::group(['prefix' => '/notifications'], function (Router $router) {

    $router->get('notifications', ['as' => 'backend.notification.notification.index', 'uses' => 'NotificationsController@index']);
    $router->get('notifications/markAllAsRead', ['as' => 'backend.notification.notification.markAllAsRead', 'uses' => 'NotificationsController@markAllAsRead']);
    $router->delete('notifications/destroyAll', ['as' => 'backend.notification.notification.destroyAll', 'uses' => 'NotificationsController@destroyAll']);
    $router->delete('notifications/{notification}', ['as' => 'backend.notification.notification.destroy', 'uses' => 'NotificationsController@destroy']);
        //Notification marking
        Route::post('mark-read/{id}', 'Common\NotificationController@markRead');
        Route::post('mark-all-read/{id}', 'Common\NotificationController@markAllRead');

        Route::get('notifications-list', ['as' => 'notification.list', 'uses' => 'Common\NotificationController@show']);
        Route::post('notification-delete/{id}', ['as' => 'notification.delete', 'uses' => 'Common\NotificationController@delete']);
        Route::get('notifications-list/delete', ['as' => 'notification.delete.all', 'uses' => 'Common\NotificationController@deleteAll']);

        Route::get('settings-notification', ['as' => 'notification.settings', 'uses' => 'Admin\helpdesk\SettingsController@notificationSettings']);
        Route::get('delete-read-notification', 'Admin\helpdesk\SettingsController@deleteReadNoti');
        Route::post('delete-notification-log', 'Admin\helpdesk\SettingsController@deleteNotificationLog');
    Route::get('test', ['as' => 'test', 'uses' => 'Common\PushNotificationController@response']);

// append
});





Route::group(['prefix' => '/alerts'], function (Router $router) {



        Route::get('getalert', ['as' => 'getalert', 'uses' => 'Admin\helpdesk\SettingsController@getalert']); // direct to alert setting page
        Route::patch('postalert/{id}', 'Admin\helpdesk\SettingsController@postalert'); // Updating the Alert table with requests


// append
});




