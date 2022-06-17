<?php

namespace App\Http\Livewire;
use App\Models\Hermano;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FotoPerfila extends Component
{
    use WithFileUploads;
 
    public $photo, $urlfoto; //archivo img
    public $open=false;

    public function mount(){
        $this->vista=Hermano::all()->where('user_id',Auth()->user()->id)->first()->id;
        $this->perfil=Hermano::find($this->vista);
        $this->perfil2=Auth()->user();
    }
    public function abrirModal(){
        $this->open=true;
    }
    
    public function cerrarModal(){
        $this->open=false;
    }
    
    public function render()
    {
        if($this->perfil->foto!=null){
            $this->urlfoto= asset('avatar/'.$this->perfil->foto);
        }else{
            $this->urlfoto=asset('img/fotoPerfil.png');
        }
        return view('livewire.foto-perfila');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1024', // 1MB Max
        ]);
        $avatar='avatar'.$this->perfil->name.'.'.$this->photo->getClientOriginalExtension();
        $this->photo->storeAs('avatar',$avatar);
        
        $this->perfil->foto = $avatar;
        $this->perfil2->foto = $avatar;
        $this->perfil->save();
        $this->perfil2->save();
        $this->cerrarModal();
        $this->dispatchBrowserEvent('swal:exito', [
            'type' => 'success',  
            'message' => '¡Exito!',
            'text' => 'La foto de perfil se ha guardado con exito, recarga la página.'
        ]);
    }
}
