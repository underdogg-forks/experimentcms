<?php

namespace Modules\Menu\Models;

use Illuminate\Database\Eloquent\Model;

class MenuTranslation extends Model
{
    protected $fillable = ['title', 'status'];
    protected $table = 'menu__menu_translations';
}
