<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    use HasEvents;
    protected $tabls='phones';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
