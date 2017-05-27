<?php

namespace Modules\Email\Models;

use Illuminate\Database\Eloquent\Model;

class MailBoxProtocols extends Model
{
    protected $table = 'email__mailboxprotocols';
    public $translatedAttributes = [];
    protected $fillable = [];
}
