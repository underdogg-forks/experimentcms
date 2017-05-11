<?php

namespace Modules\Email\Entities;

use Illuminate\Database\Eloquent\Model;

class MailboxTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'email__mailbox_translations';
}
