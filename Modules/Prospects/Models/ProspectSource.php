<?php

namespace Modules\Prospects\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ProspectSource extends Model
{
    use Translatable;

    protected $table = 'prospects__prospectsources';
    public $translatedAttributes = [];
    protected $fillable = [];
}
