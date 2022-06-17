<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hermano extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','especialidad','descripcion','grado','grupo'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function hijo(){
        return $this->hasMany(Hijo::class);
    }
    public function curso(){
        return $this->hasMany(Curso::class);
    }
    public function hexpediente(){
        return $this->hasMany(Hexpediente::class);
    }
}
