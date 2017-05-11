<?php

namespace Modules\Tickets\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'tickets__ticket_translations';
}
