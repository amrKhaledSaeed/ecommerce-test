<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasEvents;
    protected $table='posts';

    public function comments(){
        return $this->hasMany(comment::class);
    }
}
