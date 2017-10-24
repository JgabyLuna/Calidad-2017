<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permiso;

class Perfile extends Model
{
  //marcamos la relación de uno a muchos entre Perfile y User
  public function users()
    {
      return $this->hasMany(User::class);
    }

    //marcamos la relacion muchos a muchos entre Perfile y Permiso
      public function permisos()
      {
        return $this->belongsToMany('Permiso','id_perfile', 'perfile_permiso');
      }
}
