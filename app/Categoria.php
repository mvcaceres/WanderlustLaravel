<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
  public $guarded = [];

  public function productos(){
    return $this->hasMany('App\Producto', 'producto_id');
  }
}
