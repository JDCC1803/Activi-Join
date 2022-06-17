<div class="basis-3/12 bg-green-300 rounded-xl h-auto max-h-max text-left pt-4 pb-12">
    <div class="w-2/12 ml-auto">
        <button class=" bg-red-700 rounded-full px-2" wire:click="close"><i class="material-icons mt-1 text-white">close</i></button>
    </div>
    <h1 class="text-gray-900 px-6 text-lg font-bold">{{$tema}}</h1>
    
    <p class="text-gray-900 px-6 text-base"><b>Descripción:</b> {{$descripcion}}</p>
    <p class="text-gray-900 px-6 text-base"><b>Para:</b> {{$name}}</p>
</div>