<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responsable extends Model
{
    use HasFactory;

    protected $fillable = [
      "ID_RESPONSABLE","ID_RECINTO_DEPORTIVO","ID_ENCARGADO"
    ];

    public function encargado(){
        return $this->belongsTo(encargado::class);
    }

    public function recinto_deportivo(){
        return $this->belongsTo(recinto_deportivo::class);
    }


}
