<?php

namespace App\Http\Livewire;
use App\Models\Prospecto;
use App\Models\Hexpediente;
use App\Models\User;
use App\Models\Curso;
use App\Models\Hijo;
use App\Models\Hermano;
use Livewire\Component;
use Livewire\WithPagination;

class AgregarMiembro extends Component
{

    public $name, $edad, $carrera, $interes, $estado,$show,$estado2="Disponible";
    public $agregarMode = false, $perfil_id;
    public $delete_id;
    public $verMode = true;
    public $mostrarUs = false;
    
    protected $listeners=['deleteConfirmed'=>'deleteStudent'];

    public function render()
    {
        $grupo=Hijo::all()->where('padre_id',Auth()->user()->id);
        $result=Hermano::where('user_id',Auth()->user()->id)->first()->name;
        $hijo=Prospecto::all()->where('estado','Disponible');
        return view('livewire.agregar-miembro',['ver'=>$hijo,'nuevo'=>$grupo,'nombre'=>$result]);
    }
    public function close()
    {
        $this->mostrarUs=false;
    }
    public function migrupo()
    {
        $this->verMode = true;
        $this->agregarMode = false;
    }
    public function agregar(){
        $this->verMode=false;
        $this->agregarMode=true;
    }
    public function edit($id)
    {
        $result=Prospecto::where('user_id',$id)->first()->id;
        $show = Prospecto::find($result);
        $this->user_id = $show->user_id;
        $this->name= $show->name;
        $this->edad= $show->edad;
        $this->carrera= $show->carrera;
        $this->interes=$show->interes;  
        $this->mostrarUs= true;
    }

    public function delete($id)
    {
        $this->delete_id=$id;
        $this->dispatchBrowserEvent('show-delete-confirmation');

    }
    public function deleteStudent()
    {
        $result=Prospecto::where('user_id',$this->delete_id)->first()->id;
        $result2=Hijo::where('user_id',$this->delete_id)->first()->id;
        $show = Prospecto::find($result);
        $this->perfil_id=Auth()->user()->id;

        Prospecto::find($result)->update([
            'estado' => $this->estado2,
        ]);
        Hijo::find($result2)->delete();
        $this->veMode= true;
        $this->dispatchBrowserEvent('studentDeleted');
    }

    
}
