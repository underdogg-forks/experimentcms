<?php

namespace Modules\Leads\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class LeadStatus extends Model
{
    use Translatable;

    protected $table = 'leads__leadstatuses';
    public $translatedAttributes = [];
    protected $fillable = [];
}
