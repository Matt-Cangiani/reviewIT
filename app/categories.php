<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
  public $table = "categories";
  public $primaryKey = 'id';
  public $timestamps = false;
  public $guarded = [];
}
