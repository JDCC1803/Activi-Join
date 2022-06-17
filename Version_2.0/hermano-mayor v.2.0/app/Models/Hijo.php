<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    use HasFactory;
    public function carrera(){
        return $this->belongsTo(Prospecto::class);
    }
    public function hermano(){
        return $this->belongsTo(Hermano::class);
    }
    protected $fillable = ['user_id','padre_id','name','estado','bien','mal'];
}
