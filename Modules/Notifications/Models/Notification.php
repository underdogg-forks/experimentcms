<?php

namespace Modules\Notification\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string type
 * @property string message
 * @property string icon_class
 * @property string title
 * @property string link
 * @property bool is_read
 * @property \Carbon\Carbon created_at
 * @property \Carbon\Carbon updated_at
 * @property int user_id
 */
class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['user_id', 'userid_created', 'type_id', 'message', 'icon_class', 'link', 'is_read', 'title'];
    protected $appends = ['time_ago'];




    public function type()
    {
        $related = 'App\Model\helpdesk\Notification\NotificationType';
        $id = 'type_id';

        return $this->belongsTo($related, $id);
    }




    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        $driver = config('asgard.user.users.driver');

        return $this->belongsTo("Modules\\Auth\\Models\\User");
    }



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff()
    {
        return $this->belongsTo("Modules\\Employees\\Models\\Staff");
    }

    public function model()
    {
        $related = 'App\Model\helpdesk\Ticket\Tickets';
        $id = 'model_id';

        return $this->belongsTo($related, $id);
    }

    public function userNotification()
    {
        $related = 'App\Model\helpdesk\Notification\UserNotification';
        $foreignKey = 'notification_id';

        return $this->hasMany($related, $foreignKey);
    }

    public function deleteUserNotification()
    {
        $user_notifications = $this->userNotification;
        if (count($user_notifications) > 0) {
            foreach ($user_notifications as $noti) {
                $noti->delete();
            }
        }
    }

    public function dummyDelete()
    {
        $user_notifications = UserNotification::get();
        if (count($user_notifications) > 0) {
            foreach ($user_notifications as $noti) {
                $noti->delete();
            }
        }
    }

    public function delete()
    {
        $this->deleteUserNotification();
       // $this->dummyDelete();
        parent::delete();
    }


    /**
     * Return the created time in difference for humans (2 min ago)
     * @return string
     */
    public function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
