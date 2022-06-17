<?php

namespace App\Http\Livewire;
use App\Models\Prospecto;
use App\Models\User;
use App\Models\Curso;
use App\Models\Expediente;
use Livewire\Component;
use Livewire\WithPagination;

class PerfilObligatorio extends Component
{
    public $user_id, $name, $edad, $carrera, $interes, $estado='Disponible';
    public $perfil_id, $historial='Haz completado tu perfil';
    public $createMode = false;
    
    public function render()
    {
        $tarea=Curso::all()->where('prospecto_id',Auth()->user()->id)->where('estado', 'Pendiente');
        $nuevo=Prospecto::all()->where('user_id',Auth()->user()->id);
        return view('livewire.perfil-obligatorio',['new'=>$nuevo, 'pen'=>$tarea]);
    }
    public function mostrar()
    {
        $this->createMode = true;
    }
    private function resetInput(){
        $this->edad=null;
        $this->interes=null;
    }
    public function store()
    {
        $this->user_id=Auth()->user()->id;
        $this->perfil_id=Auth()->user()->id;
        $this->name=Auth()->user()->name;

        $this->validate([
            'edad' => ['required', 'string', 'max:255'],
            'carrera' => ['required', 'string', 'max:255'],
            'interes' => ['required', 'string', 'max:255'],
        ]);
        Prospecto::create([
            'user_id' => $this->user_id,
            'name' => $this->name,
            'edad' => $this->edad,
            'carrera' => $this->carrera,
            'interes' => $this->interes,
            'estado' => $this->estado,
        ]);
        Expediente::create([
            'perfil_id'=>$this->perfil_id,
            'historial'=>$this->historial,
        ]);
        $this->resetInput();
    }
}
