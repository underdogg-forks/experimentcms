<?php

namespace Modules\Email\Models;

use Illuminate\Database\Eloquent\Model;

class MailBoxProtocols extends Model
{
    public $timestamps = false;
    protected $table = 'email__mailboxprotocols';
    protected $fillable = ['id', 'name', 'value'];
}
