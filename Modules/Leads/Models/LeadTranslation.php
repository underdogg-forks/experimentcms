<?php

namespace Modules\Leads\Entities;

use Illuminate\Database\Eloquent\Model;

class LeadTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'leads__lead_translations';
}
