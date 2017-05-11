<?php

namespace Modules\Trade\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use Translatable;

    protected $table = 'trade__salesorders';
    public $translatedAttributes = [];
    protected $fillable = [];
}
