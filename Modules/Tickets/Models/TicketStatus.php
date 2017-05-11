<?php

namespace Modules\Tickets\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    use Translatable;

    protected $table = 'tickets__ticketstatuses';
    public $translatedAttributes = [];
    protected $fillable = [];
}
