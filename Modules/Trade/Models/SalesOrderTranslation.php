<?php

namespace Modules\Trade\Entities;

use Illuminate\Database\Eloquent\Model;

class SalesOrderTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'trade__salesorder_translations';
}
