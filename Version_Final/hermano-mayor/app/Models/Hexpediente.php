<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hexpediente extends Model
{
    use HasFactory;
    public function hermano(){
        return $this->belongsTo(Hermano::class);
    }
    protected $fillable = ['perfil_id','historial'];

}
