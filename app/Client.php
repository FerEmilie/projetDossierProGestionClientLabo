<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function materiels()
  {
  return $this->belongsToMany('App\Materiel');
  }
}
