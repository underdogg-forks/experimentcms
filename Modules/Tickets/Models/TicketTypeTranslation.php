<?php

namespace Modules\Tickets\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketTypeTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'tickets__tickettype_translations';
}
