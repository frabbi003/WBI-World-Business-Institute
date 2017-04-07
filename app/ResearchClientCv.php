<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchClientCv extends Model
{
    protected $table = 'research_client_cvs';

    protected $fillable = ['research_clients_id', 'client_cv', 'status'];

    public function parent()
    {
        return $this->belongsTo('App\ResearchClient','research_clients_id');
    }
}
