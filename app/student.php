<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasEvents;
   protected $table='students';
   protected $fillable=[
        'name',
        'profileImage',
   ];

}
