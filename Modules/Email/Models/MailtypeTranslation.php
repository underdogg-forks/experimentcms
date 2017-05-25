<?php

namespace Modules\Email\Entities;

use Illuminate\Database\Eloquent\Model;

class MailBoxTypeTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'email__mailboxtype_translations';
}
