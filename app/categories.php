<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
  public $table = "categories";
  public $timestamps = false;
  public $fillable = [];

public function categoria(){

  return $this->hasmany("App\articulos","categoria_id");
}
}
