<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefono_en extends Model
{
    use HasFactory;

    protected $fillable=[
       "ID_TELEFONO_EN",
        "ID_ENCARGADO",
        "NUMERO_TELEFONO"
    ];

    public function encargado()
    {
        return $this->belongsTo(encargado::class);
    }




}
