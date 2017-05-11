<?php

namespace Modules\Tickets\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class TicketPriority extends Model
{
    use Translatable;

    protected $table = 'tickets__ticketpriorities';
    public $translatedAttributes = [];
    protected $fillable = [];
}
