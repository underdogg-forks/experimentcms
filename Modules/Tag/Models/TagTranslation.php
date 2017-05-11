<?php

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['slug', 'name'];
    protected $table = 'tag__tag_translations';
}
