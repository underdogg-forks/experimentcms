<?php

namespace Modules\Leads\Entities;

use Illuminate\Database\Eloquent\Model;

class LeadSourceTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'leads__leadsource_translations';
}
