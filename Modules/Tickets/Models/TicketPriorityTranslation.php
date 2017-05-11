<?php

namespace Modules\Tickets\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketPriorityTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'tickets__ticketpriority_translations';
}
