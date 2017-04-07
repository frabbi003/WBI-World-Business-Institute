<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchFooter extends Model
{
    protected $table = 'rch_footer';
    protected $fillable = ['title', 'phone', 'copy_right', 'status', 'fax_number'];
}
