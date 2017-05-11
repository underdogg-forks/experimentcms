<?php

namespace Modules\Email\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Mailtype extends Model
{
    use Translatable;

    protected $table = 'email__mailtypes';
    public $translatedAttributes = [];
    protected $fillable = [];
}
