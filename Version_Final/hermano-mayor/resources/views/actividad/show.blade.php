<div class="basis-3/12  rounded-xl h-auto max-h-max text-left pt-4 pb-12 bg-gradient-to-r from-cyan-500 to-indigo-800 p-6">
    <div class="w-2/12 ml-auto">
        <button class=" bg-red-700 rounded-full px-2" wire:click="close"><i class="material-icons mt-1 text-white">close</i></button>
    </div>
    <card class="p-8 w-[32rem]">
        <!-- Header -->
        <header class="flex font-light text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2" viewBox="0 0 24 24" stroke="#b91c1c">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
            <p class="text-white">CapaciTEC</p>
        </header>
        <!-- Title -->
        <h2 class="font-bold text-3xl mt-2 text-white">
            {{$tema}}
        </h2>
        <!-- Description -->
        <h3 class="font-bold text-xl mt-8 text-white">Descripcion:</h3>
        <p class="font-light text-white"> {{$descripcion}} </p>
        <!-- Button -->
        <form>
            <input type="hidden" name="user_id" wire:model="user_id">
            <input type="hidden" name="estado" wire:model="estado">
            <input type="hidden" name="estado2" wire:model="estado2">
            <input type="hidden" name="prospecto_id" wire:model="prospecto_id">
            <input type="hidden" name="hermano_id" wire:model="hermano_id">
            <input type="hidden" name="expediente" wire:model="expediente">
            <input type="hidden" name="hexpediente" wire:model="hexpediente">
            <input type="hidden" name="expediente2" wire:model="expediente2">
            <input type="hidden" name="hexpediente2" wire:model="hexpediente2">
            @if($status=='Pendiente')
                <button class="bg-red-600 text-white rounded-full font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group" wire:click="edit">
                    <p> Aceptar </p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                <button class="bg-green-700 rounded-full text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group" wire:click="update">
                    <p> Rechazar</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            @endif
        </form>
    </card>
</div>
