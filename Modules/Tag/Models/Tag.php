<?php

namespace Modules\Tag\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Translatable;

    protected $table = 'tag__tags';
    public $translatedAttributes = ['slug', 'name'];
    protected $fillable = ['namespace', 'slug', 'name'];
}
