<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchSocialLink extends Model
{
    protected $table = 'rch_social_link';
    protected $fillable = ['social_link', 'social_icon_class', 'social_status'];
}
