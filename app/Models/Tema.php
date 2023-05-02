<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    public function Asignatura(){
        return $this->belongsTo(Asignatura::class);
    }
    public function Notas(){
        return $this->hasMany(Notas::class);
    }
    public function Recordatorios(){
        return $this->hasMany(Recordatorios::class);
    }
}
