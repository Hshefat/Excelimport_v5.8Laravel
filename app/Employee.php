<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
   protected $tabel = "employees";

   protected $fillable = ['name','email','phone','salary','department'];

   public static function getEmployee( )
   {
$records = DB::table('employees')->select('id','name','email','phone','salary','department');
return $records;
   } 
}
