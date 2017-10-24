<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Perfile;

class Permiso extends Model
{
  //
  public function perfiles()
  {
    return $this->belongsToMany('Perfile','id_permiso', 'perfile_permiso');
  }
}
