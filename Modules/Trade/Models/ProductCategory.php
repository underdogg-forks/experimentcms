<?php

namespace Modules\Trade\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use Translatable;

    protected $table = 'trade__productcategories';
    public $translatedAttributes = [];
    protected $fillable = [];
}
