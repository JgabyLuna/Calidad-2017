<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //relacion pertenece a un Departamento
    public function depatamentos()
    {
      return $this->belongsTo(Departamento::class);
    }

    //relacion pertenece a un Proceso
    public function procesos()
    {
      return $this->belongsTo(Proceso::class);
    }

    //relacion pertenece a un DocumentoTipo
    public function documentoTipos()
    {
      return $this->belongsTo(DocumentoTipo::class);
    }

    //relacion mucho a muchos entre Documento y User
    public function users()
    {
      return $this->belongsToMany('User','id_documento', 'documento_usuario');
    }

    //relacion de mucho a muchos entre Documento y DocumentoEstado
    public function documentoEstados()
    {
      return $this->belongsToMany('DocumentoEstado','id_documento', 'documento_documentoEstado');
    }
}
