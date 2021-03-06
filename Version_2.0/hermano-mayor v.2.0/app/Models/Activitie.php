<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
    public function curso(){
        return $this->hasMany(Curso::class);
    }
}
