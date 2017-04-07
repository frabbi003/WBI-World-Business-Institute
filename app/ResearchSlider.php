<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchSlider extends Model
{
    protected $table = 'rch_slider';
    protected $fillable = ['slider_link', 'slider_title','slider_img', 'slider_cover_img', 'slider_status', 'slider_position'];
}
