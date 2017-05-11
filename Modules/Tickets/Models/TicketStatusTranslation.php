<?php

namespace Modules\Tickets\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketStatusTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'tickets__ticketstatus_translations';
}
