<?php

namespace Modules\Email\Entities;

use Illuminate\Database\Eloquent\Model;

class MailtypeTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'email__mailtype_translations';
}
