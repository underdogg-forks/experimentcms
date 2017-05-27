<?php

namespace Modules\Email\Models;

use Illuminate\Database\Eloquent\Model;

class MailSendType extends Model
{
    protected $table = 'mail_sendtypes';
    protected $fillable = ['name', 'short_name'];
}
