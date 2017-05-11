<?php

namespace Modules\Tickets\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    use Translatable;

    protected $table = 'tickets__tickettypes';
    public $translatedAttributes = [];
    protected $fillable = [];
}
