<?php

namespace Modules\Trade\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'trade__product_translations';
}
