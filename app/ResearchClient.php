<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchClient extends Model
{
    protected $table = 'research_clients';

    protected $fillable = ['name', 'email', 'uni_name', 'password', 'country', 'position', 'status'];

    public function clientCV()
    {
        return $this->hasMany('App\ResearchClientCv', 'research_clients_id');
    }
}
