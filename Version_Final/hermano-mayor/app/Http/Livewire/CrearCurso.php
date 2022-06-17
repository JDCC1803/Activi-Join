<?php

namespace App\Http\Livewire;
use App\Models\Prospecto;
use App\Models\Hexpediente;
use App\Models\User;
use App\Models\Curso;
use App\Models\Hijo;
use App\Models\Hermano;
use App\Models\Activitie;
use Livewire\Component;

class CrearCurso extends Component
{
    public $carrera, $tema, $descripcion, $estado;
    public $agregarMode = true;
    public $verMode=false;
    public $crearForm=false;
    public $mostrarAc=false;
    public $verAc=false;


    public function render()
    {
        $act=Activitie::all()->where('estado','Valido');
        $destino= Hijo::all()->where('padre_id',Auth()->user()->id);
        $result=Hermano::where('user_id',Auth()->user()->id)->first()->name;
        $asig=Curso::all()->where('hermano_id',Auth()->user()->id);
        return view('livewire.crear-curso',['ver'=>$act,'nombre'=>$result,'nuevo'=>$destino,'mio'=>$asig]);
    }
    public function viewact()
    {
        $this->verMode = false;
        $this->agregarMode=true;
    }
    public function misact()
    {
        $this->verMode = true;
        $this->agregarMode=false;
    }
    public function close(){
        $this->mostrarAc=false;
        $this->verAc=false;
    }
    public function misAc($id)
    {
        $show = Curso::find($id);
        $this->estado='Finalizado';
        $this->user_id=$show->id;
        $this->status=$show->estado;
        $this->tema= $show->tema;
        $this->descripcion= $show->descripcion;
        $this->name= $show->name;

        $this->verAc=true;
    }
    public function show($id)
    {
        $show = Activitie::find($id);
        $this->tema= $show->tema;
        $this->descripcion= $show->descripcion;
        $this->carrera= $show->carrera;
        $this->mostrarAc= true;

    }
    public function edit(){
        Curso::find($this->user_id)->update([
            'estado' => $this->estado,
        ]);
        $this->dispatchBrowserEvent('activitieFinish');
    }
    public function create()
    {
        $this->tema;
        $this->descripcion;
        $this->carrera;
        $this->crearForm= true;
    }
}
