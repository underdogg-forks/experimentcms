<?php

namespace Modules\Prospects\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ProspectStatus extends Model
{
    use Translatable;

    protected $table = 'prospects__prospectstatuses';
    public $translatedAttributes = [];
    protected $fillable = [];
}
