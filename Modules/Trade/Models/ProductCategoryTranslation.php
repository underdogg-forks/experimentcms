<?php

namespace Modules\Trade\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'trade__productcategory_translations';
}
