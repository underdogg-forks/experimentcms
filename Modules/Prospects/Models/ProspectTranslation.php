<?php

namespace Modules\Prospects\Entities;

use Illuminate\Database\Eloquent\Model;

class ProspectTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'prospects__prospect_translations';
}
