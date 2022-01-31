<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasEvents;
    protected $table='comments';
    public function post(){
        return $this->belongsTo(post::class);
    }
}
