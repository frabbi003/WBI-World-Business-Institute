<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchLogo extends Model
{
    protected $fillable = ['logo_img','logo_status'];
    protected $table = 'rch_logo';
}
