<?php
namespace Modules\Employees\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

  protected $fillable =
    [
      'name', 'departmenttype', 'isdefault', 'slaplan_id', 'manager_id'
    ];



}
