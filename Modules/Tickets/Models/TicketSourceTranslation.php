<?php

namespace Modules\Tickets\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketSourceTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'tickets__ticketsource_translations';
}
