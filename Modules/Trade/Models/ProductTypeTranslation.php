<?php

namespace Modules\Trade\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductTypeTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'trade__producttype_translations';
}
