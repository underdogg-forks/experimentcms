<?php

namespace Modules\Prospects\Entities;

use Illuminate\Database\Eloquent\Model;

class ProspectSourceTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'prospects__prospectsource_translations';
}
