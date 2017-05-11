<?php

namespace Modules\Trade\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;

    protected $table = 'trade__products';
    public $translatedAttributes = [];
    protected $fillable = [];
}
