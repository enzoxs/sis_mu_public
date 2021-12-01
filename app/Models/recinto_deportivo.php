<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recinto_deportivo extends Model
{
    use HasFactory;

    protected $fillable =[
        "ID_RECINTO",
        "ID_TIPO_RECINTO",
        "NOMBRE_RECINTO",
        "DIRECCION_RECINTO",
        "COODERNADAS_RECINTO"
    ];

    public function fotografia()
    {
        return $this->hasMany(fotografia::class);
    }

    public function tipo_recinto()
    {
        return $this->belongsTo(tipo_recinto::class);
    }









}
