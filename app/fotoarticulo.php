<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotoarticulo extends Model
{
  public $table = "fotoarticulo";
  public $primaryKey = 'id';
  public $timestamps = false;
  public $guarded = [];
}
