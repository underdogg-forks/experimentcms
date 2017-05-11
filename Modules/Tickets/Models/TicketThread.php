<?php

namespace Modules\Tickets\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class TicketThread extends Model
{
    use Translatable;

    protected $table = 'tickets__ticketthreads';
    public $translatedAttributes = [];
    protected $fillable = [];
}
