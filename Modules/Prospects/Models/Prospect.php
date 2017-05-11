<?php

namespace Modules\Prospects\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use Translatable;

    protected $table = 'prospects__prospects';
    public $translatedAttributes = [];
    protected $fillable = [];
}
