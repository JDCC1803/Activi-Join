<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public function activitie(){
        return $this->belongsTo(Activitie::class);
    }
    public function hermano(){
        return $this->belongsTo(Hermano::class);
    }
    protected $fillable = ['carrera','tema','descripcion','estado','finalizado','name'];
}
