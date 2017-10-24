<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  //relacion pertenece a un User
  public function user()
    {
      return $this->belongsTo(User::class);
    }
}
