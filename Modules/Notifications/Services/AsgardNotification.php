<?php namespace Modules\Notifications\Services;

//use Modules\Core\Contracts\Authentication;
use Modules\Notifications\Events\BroadcastNotification;
use Modules\Notifications\Repositories\NotificationRepository;

final class AsgardNotification implements Notification
{
    /**
     * @var NotificationRepository
     */
    private $notification;
    /**
     * @var Authentication
     */
    private $auth;
    /**
     * @var int
     */
    private $userId;

    public function __construct(NotificationRepository $notification, Authentication $auth)
    {
        $this->notification = $notification;
        $this->auth = $auth;
    }

    /**
     * Push a notification on the dashboard
     * @param string $title
     * @param string $message
     * @param string $icon
     * @param string|null $link
     */
    public function push($title, $message, $icon, $link = null)
    {
        $notification = $this->notification->create([
            'staff_id' => $this->staffId ?: Auth::check()->id,
            'icon_class' => $icon,
            'link' => $link,
            'title' => $title,
            'message' => $message,
        ]);

        if (true === config('asgard.notification.config.real-time', false)) {
            $this->triggerEventFor($notification);
        }
    }

    /**
     * Trigger the broadcast event for the given notification
     * @param \Modules\Notifications\Entities\Notification $notification
     */
    private function triggerEventFor(\Modules\Notifications\Entities\Notification $notification)
    {
        event(new BroadcastNotification($notification));
    }

    /**
     * Set a user id to set the notification to
     * @param int $userId
     * @return $this
     */
    public function to($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
