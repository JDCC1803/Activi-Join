<?php

namespace App\Http\Livewire;
use App\Models\Hexpediente;
use App\Models\Expediente;
use App\Models\Curso;
use App\Models\Hermano;
use Livewire\Component;

class VerActividad extends Component
{
    public $name, $name2, $tema, $descripcion, $carrera, $estado, $estado2;
    public $expediente, $expediente2, $hexpediente, $hexpediente2;
    public $valor;
    public $verAc=false;

    public function render()
    {
        $ver= Curso::all()->where('prospecto_id',Auth()->user()->id);
        return view('livewire.ver-actividad',['ver'=>$ver]);
    }
    public function detalle($id)
    {
        
        $show = Curso::find($id);
        $ver =Curso::where('id',$id)->first()->hermano_id;
        $nombre =Hermano::where('user_id',$ver)->first()->id;
        $mont = Hermano::find($nombre);

        
        $this->estado='Aceptada';
        $this->estado2='Rechazada';
        
        $this->tema= $show->tema;
        $this->descripcion= $show->descripcion;
        $this->name= $show->name;
        $this->name2=$mont->name;
        $this->user_id=$show->id;
        $this->prospecto_id=$show->prospecto_id;
        $this->hermano_id=$show->hermano_id;
        $this->expediente="Haz aceptado la actividad '".$this->tema."' del asesor '".$this->name2."'";
        $this->expediente2="Rechazaste la actividad '".$this->tema."' del asesor '".$this->name2."'";
        $this->hexpediente="'".$this->name."' acepto la actividad de '".$this->tema."'";
        $this->hexpediente2="'".$this->name."' rechazo la actividad de '".$this->tema."'";


        $this->verAc=true;
    }
    public function close(){
        $this->verAc=false;
    }
    public function edit()
    {
        Expediente::create([
            'perfil_id' => $this->prospecto_id,
            'historial' => $this->expediente,
        ]);
        Hexpediente::create([
            'perfil_id' => $this->hermano_id,
            'historial' => $this->hexpediente,
        ]);
        Curso::find($this->user_id)->update([
            'estado' => $this->estado,
        ]);
    }
    public function update()
    {
        Expediente::create([
            'perfil_id' => $this->prospecto_id,
            'historial' => $this->expediente2,
        ]);
        Hexpediente::create([
            'perfil_id' => $this->hermano_id,
            'historial' => $this->hexpediente2,
        ]);
        Curso::find($this->user_id)->update([
            'estado' => $this->estado2,
        ]);
    }
}
