<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasEvents;
    protected $table='role_users';
}
