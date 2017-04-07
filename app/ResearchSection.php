<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchSection extends Model
{
    protected $table = 'rchsection';
    protected $fillable = ['title', 'status'];
}
