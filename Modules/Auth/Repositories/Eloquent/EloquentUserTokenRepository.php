<?php

namespace Modules\Auth\Repositories\Eloquent;

use Illuminate\Database\QueryException;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Modules\Auth\Repositories\UserTokenRepository;
use Ramsey\Uuid\Uuid;

class EloquentUserTokenRepository extends EloquentBaseRepository implements UserTokenRepository
{
    /**
     * Get all tokens for the given user
     * @param int $userId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function allForUser($userId)
    {
        return $this->model->where('staff_id', $userId)->get();
    }

    /**
     * @param int $userId
     * @return \Modules\Auth\Models\UserToken
     */
    public function generateFor($userId)
    {
        try {
            $uuid4 = Uuid::uuid4();
            $userToken = $this->model->create(['staff_id' => $userId, 'access_token' => $uuid4]);
        } catch (QueryException $e) {
            $this->generateFor($userId);
        }

        return $userToken;
    }
}
