<?php

namespace Modules\Prospects\Entities;

use Illuminate\Database\Eloquent\Model;

class ProspectStatusTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'prospects__prospectstatus_translations';
}
