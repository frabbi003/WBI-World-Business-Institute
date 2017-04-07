<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchPagerParts extends Model
{
    protected $table = 'rch_pager_parts';
    protected $fillable = ['link', 'status', 'position', 'title'];
}
