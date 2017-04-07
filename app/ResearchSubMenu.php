<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchSubMenu extends Model
{
    protected $fillable = ['sub_menu_link', 'sub_menu_parent_id', 'sub_menu_name', 'sub_menu_pos', 'sub_menu_status'];
    protected $table = 'rchsubmenu';

    public function parent()
    {
        return $this->belongsTo('App\ResearchMenu','rchmenu_id');
    }
}
