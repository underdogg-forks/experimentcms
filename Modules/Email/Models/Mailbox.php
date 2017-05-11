<?php

namespace Modules\Email\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    use Translatable;

    protected $table = 'email__mailboxes';
    public $translatedAttributes = [];
    protected $fillable = [];
}
