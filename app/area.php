<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    //
    protected $table = 'areas';

    public static function getareacode()
    {
      $seed = rand(1,3200);
      $area = area::where('code','not like','%00')->inRandomOrder()->first();

      return $area->code;
    }
}
