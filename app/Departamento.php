<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //relacion uno a mucho entre Departamento y Documento
    public function documentos()
    {
      return $this->hasMany(Documento::class);
    }
}
