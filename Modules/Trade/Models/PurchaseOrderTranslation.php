<?php

namespace Modules\Trade\Entities;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'trade__purchaseorder_translations';
}
