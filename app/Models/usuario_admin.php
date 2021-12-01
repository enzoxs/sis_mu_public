<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario_admin extends Model
{
    use HasFactory;

    protected $fillable=[
        "ID_USUARIO_AD",
        "ID_TIPO_USUARIO",
        "USERNAME_USUARIO_ID",
        "PASSWORD_USUARIO_AD",
        "NOMBRE_USUARIO_AD",
        "APELLIDO_USUARIO_AD",
        "FECHA_REGISTRO_USUARIO_AD"
    ];
    /*
     public function usuario_admin(){
     return $this->hasMany(usuario_admin::class);
        }
     */

    public function tipo_usuario(){
        return $this -> belongsTo(tipo_usuario::class);
    }
    // Revisar cuando se cree la clase del modelo horario
    public function horario()
    {
        return $this -> hasMany(horario::class);
    }


}
