<?php

namespace Modules\Trade\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use Translatable;

    protected $table = 'trade__purchaseorders';
    public $translatedAttributes = [];
    protected $fillable = [];
}
