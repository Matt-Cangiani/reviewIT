<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
  public $table = "articulos";
  public $timestamps = false;
  public $fillable = [];

public function categoria(){

  return $this->belongsto("App\categories","categoria_id");
}
}
