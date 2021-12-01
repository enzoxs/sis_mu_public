<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotografia extends Model
{
    use HasFactory;

    protected $fillable =[
      "ID_FOTOGRAFIA",
      "ID_RECINTO_DEPORTIVO",
        "PATH"
    ];

    public function recinto_deportivo(){
        return $this->belongsTo(recinto_deportivo::class);
    }

}
