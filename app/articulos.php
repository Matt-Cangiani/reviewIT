<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
  public $table = "articulos";
  public $primaryKey = 'id';
  public $timestamps = false;
  public $guarded = [];

public function categoria(){

  return $this->belongsto("App\categories","categoria_id");
}
}
