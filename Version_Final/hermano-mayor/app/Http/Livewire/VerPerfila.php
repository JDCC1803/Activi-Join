<?php

namespace App\Http\Livewire;
use App\Models\Prospecto;
use App\Models\User;
use App\Models\Hexpediente;
use App\Models\Hijo;
use App\Models\Curso;
use Livewire\Component;

class VerPerfila extends Component
{
    public $historialMode = false;
    public $logrosMode = false;
    public function render()
    {
        $registro=Hexpediente::all()->where('perfil_id',Auth()->user()->id);
        return view('livewire.ver-perfila',['historial'=>$registro]);
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
