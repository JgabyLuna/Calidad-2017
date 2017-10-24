<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProsesoTipo extends Model
{
    //relacion de uno a mucho entre ProcesoTipo y Proceso
    public function procesos()
    {
      return $this->hasMany(Proceso::class);
    }
}
