<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encargado extends Model
{
    use HasFactory;
    protected $fillable=[
        "ID_ENCARGADO",
        "NOMBRE_ENCARGADO",
        "APELLIDO_ENCARGADO"
    ];
    public function telefono_en(){
        return $this->hasMany(telefono_en::class);
    }

    public function responsable(){
        return $this->hasMany(responsable::class);
    }


}
