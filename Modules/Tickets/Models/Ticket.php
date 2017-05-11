<?php

namespace Modules\Tickets\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use Translatable;

    protected $table = 'tickets__tickets';
    public $translatedAttributes = [];
    protected $fillable = [];
}
