<?php

namespace App\Http\Livewire;
use App\Models\Hermano;
use App\Models\User;
use App\Models\Curso;
use App\Models\Hexpediente;
use Livewire\Component;
use Livewire\WithPagination;

class PerfilaObligatorio extends Component
{
    public $user_id, $name, $especialidad, $descripcion, $grado, $grupo;
    public $perfil_id, $historial='Haz completado tu perfil';
    public $createMode = false;
    public function render()
    {
        $nuevo=Hermano::all()->where('user_id',Auth()->user()->id);
        return view('livewire.perfila-obligatorio',['new'=>$nuevo]);
    }
    public function mostrar()
    {
        $this->createMode = true;
    }
    private function resetInput(){
        $this->descripcion=null;
    }
    public function store()
    {
        $this->user_id=Auth()->user()->id;
        $this->perfil_id=Auth()->user()->id;
        $this->name=Auth()->user()->name;
        $this->validate([
            'especialidad' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:2000'],
            'grado' => ['required', 'string', 'max:200'],
            'grupo' => ['required', 'string', 'max:200'],
        ]);

        Hexpediente::create([
            'perfil_id'=>$this->perfil_id,
            'historial'=>$this->historial,
        ]);
        Hermano::create([
            'user_id' => $this->user_id,
            'name' => $this->name,
            'especialidad' => $this->especialidad,
            'descripcion' => $this->descripcion,
            'grado' => $this->grado,
            'grupo' => $this->grupo,
        ]);

        $this->resetInput();
    }
}
