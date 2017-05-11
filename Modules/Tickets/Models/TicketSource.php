<?php

namespace Modules\Tickets\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class TicketSource extends Model
{
    use Translatable;

    protected $table = 'tickets__ticketsources';
    public $translatedAttributes = [];
    protected $fillable = [];
}
