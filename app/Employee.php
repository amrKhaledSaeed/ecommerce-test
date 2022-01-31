<?php

namespace App;

use Facade\FlareClient\Glows\Recorder;
use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
   use HasEvents;
   protected $table='employees';

   public static function getEmployee(){
    $record=DB::table('employees')->select('name','email','phone','salary','department')->get()->toArray();
        return $record;
   }
}
