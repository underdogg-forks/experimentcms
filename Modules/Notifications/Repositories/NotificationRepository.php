<?php

namespace Modules\Notifications\Repositories;

use Modules\Notification\Models\Notification;

class TeamRepository extends \Prettus\Repository\Eloquent\BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
    ];

    public function findWithoutFail($id, $columns = ['*'])
    {
        try {
            return $this->find($id, $columns);
        } catch (Exception $e) {
            return;
        }
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return Notification::class;
    }
}
