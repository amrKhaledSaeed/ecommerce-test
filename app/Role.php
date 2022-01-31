<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    use HasEvents;
    protected $table='roles';

    public function user(){
          return $this->belongsToMany(User::class,'role_users');
    }


}
