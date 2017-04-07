<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchMenu extends Model
{
    protected $table = 'rchmenu';
    protected $fillable = ['menu_link', 'menu_name', 'menu_pos', 'menu_status'];

    public function subMenu()
    {
        return $this->hasMany('App\ResearchSubMenu', 'rchmenu_id');
    }
}
