<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospecto extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function graduado(){
        return $this->hasMany(Graduado::class);
    }
    public function expediente(){
        return $this->hasMany(Expediente::class);
    }
    protected $fillable = ['user_id','name','edad','carrera','interes','estado'];
}
