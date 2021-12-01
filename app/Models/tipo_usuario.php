<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_usuario extends Model
{
    use HasFactory;

    protected $fillable=[
        "ID_TIPO_USUARIO","NOMBRE_TIPO_USUARIO"
        ];

    public function usuario_admin(){
        return $this->hasMany(usuario_admin::class);
    }



}
