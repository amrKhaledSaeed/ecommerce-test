<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
class RoleController extends Controller
{
    public function addRole(){
        $roles=[

              ['role'=>'Admin'],
              ['role'=>'Editor'],
              ['role'=>'Author'],
              ['role'=>'contributor'],
              ['role'=>'Subscripers'],
        ];
        Role::insert($roles);
        return 'roules are created';
    }
}
