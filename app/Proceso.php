<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
  //relacion uno a muchos entre Proceso y Documento
  public function documentos()
  {
    return $this->hasMany(Documentos::class);
  }

  //relacion pertenece a un ProcesoTipo
  public function procesoTipos()
  {
    return $this->belongsTo(ProcesoTipo::class);
  }
}
