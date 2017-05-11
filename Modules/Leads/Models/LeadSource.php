<?php

namespace Modules\Leads\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class LeadSource extends Model
{
    use Translatable;

    protected $table = 'leads__leadsources';
    public $translatedAttributes = [];
    protected $fillable = [];
}
