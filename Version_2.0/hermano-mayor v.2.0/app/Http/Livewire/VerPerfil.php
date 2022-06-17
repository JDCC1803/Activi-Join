<?php

namespace App\Http\Livewire;
use App\Models\Prospecto;
use App\Models\User;
use App\Models\Expediente;
use App\Models\Curso;
use Livewire\Component;

class VerPerfil extends Component
{
    public $historialMode = false;
    public $logrosMode = false;
    public function render()
    {
        $registro=Expediente::all()->where('perfil_id',Auth()->user()->id);
        return view('livewire.ver-perfil',['historial'=>$registro]);
    }
    public function historial()
    {
        $this->historialMode = true;
        $this->logrosMode = false;
    }
    public function logros()
    {
        $this->logrosMode = true;
        $this->historialMode = false;
    }
}
