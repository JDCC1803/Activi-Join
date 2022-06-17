<div class="basis-3/12 bg-green-300 rounded-xl h-96 max-h-max text-left py-4">
    <div class="w-2/12 ml-auto">
        <button class=" bg-red-700 rounded-full px-2" wire:click="close"><i class="material-icons mt-1 text-white">close</i></button>
    </div>
    <h1 class="text-gray-900 px-6 text-lg font-bold">Información de perfil</h1>
    
    <p class="text-gray-900 px-6 text-base"><b>Nombre:</b> {{$name}}</p>
    <p class="text-gray-900 px-6 text-base"><b>Edad:</b> {{$edad}}</p>
    <p class="text-gray-900 px-6 text-base"><b>Opcion esperada:</b> {{$carrera}}</p>
    <p class="text-gray-900 px-6 text-base"><b>Motivo:</b> {{$interes}}</p>

</div>