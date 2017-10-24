<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoEstado extends Model
{
    //relacion de mucho a muchos entre DocumentoEstado y Documento
    public function documentos()
    {
      return $this->belongsToMany('Documento','id_documentoEstado', 'documento_documentoEstado');
    }
}
