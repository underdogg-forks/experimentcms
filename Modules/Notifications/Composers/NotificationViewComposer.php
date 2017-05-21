<?php namespace Modules\Notifications\Composers;

use Illuminate\Contracts\View\View;
//use Modules\Core\Contracts\Authentication;
use Modules\Notifications\Repositories\NotificationRepository;

class NotificationViewComposer
{
    /**
     * @var NotificationRepository
     */
    private $notification;
    /**
     * @var Authentication
     */
    private $auth;

    public function __construct(NotificationRepository $notification, Authentication $auth)
    {
        $this->notification = $notification;
        $this->auth = $auth;
    }

    public function compose(View $view)
    {
        $notifications = $this->notification->latestForUser($this->auth->check()->id);
        $view->with('notifications', $notifications);
    }
}
