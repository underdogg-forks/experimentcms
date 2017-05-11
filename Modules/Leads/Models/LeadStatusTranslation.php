<?php

namespace Modules\Leads\Entities;

use Illuminate\Database\Eloquent\Model;

class LeadStatusTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'leads__leadstatus_translations';
}
