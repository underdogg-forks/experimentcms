<?php

namespace Modules\Email\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class MailBoxType extends Model
{
    use Translatable;

    protected $table = 'email__mailboxtypes';
    public $translatedAttributes = [];
    protected $fillable = [];
}
