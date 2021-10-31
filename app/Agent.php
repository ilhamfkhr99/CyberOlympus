<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = "agent";
    protected $primaryKey = "id";

    // public function users(){
    //     return $this->hasOne('App\Users', );
    // }
}
