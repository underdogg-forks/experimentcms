<?php

namespace Modules\Leads\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use Translatable;

    protected $table = 'leads__leads';
    public $translatedAttributes = [];
    protected $fillable = [];
}
