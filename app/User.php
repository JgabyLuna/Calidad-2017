<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //marcamos la relación pertenece a un perfile
    public function perfiles()
      {
		    return $this->belongsTo(Perfile::class);
      }

  //marcamos la relacion de uno a muchos entre User y Empleado
    public function empleados()
      {
        return $this->hasMany(Empleado::class);
      }

  //relacion de mucho a muchos entre User y Documento
  public function documentos()
  {
    return $this->belongsToMany('Documento','id_user', 'documento_usuario');
  }
}
