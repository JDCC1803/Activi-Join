<div class="basis-3/12 bg-green-300 rounded-xl h-auto max-h-max text-left pt-4 pb-12">
    <div class="w-2/12 ml-auto">
        <button class=" bg-red-700 rounded-full px-2" wire:click="close"><i
                class="material-icons mt-1 text-white">close</i></button>
    </div>
    <h1 class="text-gray-900 px-6 text-lg font-bold">{{$tema}}</h1>

    <p class="text-gray-900 px-6 text-base"><b>Descripción:</b> {{$descripcion}}</p>
    <form>
        <input type="hidden" name="user_id" wire:model="user_id">
        <input type="hidden" name="estado" wire:model="estado" >
        <input type="hidden" name="estado2" wire:model="estado2" >
        <input type="hidden" name="prospecto_id" wire:model="prospecto_id" >
        <input type="hidden" name="hermano_id" wire:model="hermano_id" >
        <input type="hidden" name="expediente" wire:model="expediente" >
        <input type="hidden" name="hexpediente" wire:model="hexpediente" >
        <input type="hidden" name="expediente2" wire:model="expediente2" >
        <input type="hidden" name="hexpediente2" wire:model="hexpediente2">
        <button class="bg-green-700 rounded-full px-2" wire:click="edit">Aceptar</button>
        <button class="bg-red-700 rounded-full px-2" wire:click="update">Rechazar</button>

    </form>
</div>