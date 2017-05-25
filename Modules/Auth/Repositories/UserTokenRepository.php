<?php

namespace Modules\Auth\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface UserTokenRepository extends BaseRepository
{
    /**
     * Get all tokens for the given user
     * @param int $userId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function allForUser($userId);

    /**
     * @param int $userId
     * @return \Modules\Auth\Models\UserToken
     */
    public function generateFor($userId);
}
