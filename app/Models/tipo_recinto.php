<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_recinto extends Model
{
    use HasFactory;

    protected $fillable=[
      "ID_TIPO_RECINTO",
      "NOMBRE_TIPO_RECINTO"
    ];

    public function recinto_deportivo ()
    {
        return $this -> hasMany(recinto_deportivo::class);
    }


}
