<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class test2 extends Model
{
   public static function incomplete(){
       return static::where('complete',0)->get();
   }
}
