<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoTipo extends Model
{
    //relacion de uno a mucho entre DocumentoTipo y Documento
    public function documentos()
    {
      return $this->hasMany(Documentos::class);
    }
}
