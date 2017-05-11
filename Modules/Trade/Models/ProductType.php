<?php

namespace Modules\Trade\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use Translatable;

    protected $table = 'trade__producttypes';
    public $translatedAttributes = [];
    protected $fillable = [];
}
