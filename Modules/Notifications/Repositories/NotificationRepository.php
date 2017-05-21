<?php namespace Modules\Notifications\Repositories;

use Modules\Core\Repositories\BaseRepository;

/**
 * Interface NotificationRepository
 * @package Modules\Notifications\Repositories
 */
interface NotificationRepository extends BaseRepository
{
    /**
     * @param int $userId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function latestForUser($userId);

    /**
     * Mark the given notification id as "read"
     * @param int $notificationId
     * @return bool
     */
    public function markNotificationAsRead($notificationId);

    /**
     * Get all the notifications for the given user id
     * @param int $userId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function allForUser($userId);

    /**
     * Get all the unread notifications for the given user id
     * @param int $userId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function allUnreadForUser($userId);

    /**
     * Delete all the notifications for the given user
     * @param int $userId
     * @return bool
     */
    public function deleteAllForUser($userId);

    /**
     * Mark all the notifications for the given user as read
     * @param int $userId
     * @return bool
     */
    public function markAllAsReadForUser($userId);
}
