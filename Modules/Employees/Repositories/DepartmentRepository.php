<?php

namespace Modules\Employees\Repositories;

use Modules\Employees\Models\Department;

class DepartmentRepository extends \Prettus\Repository\Eloquent\BaseRepository
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
        return Department::class;
    }
}
