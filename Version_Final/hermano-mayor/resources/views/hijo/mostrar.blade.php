<div class="basis-3/12  rounded-xl h-auto max-h-max text-left pt-4 pb-12 bg-gradient-to-r from-cyan-500 to-indigo-800 p-6">
    <div class="w-2/12 ml-auto">
        <button class=" bg-red-700 rounded-full px-2" wire:click="close"><i class="material-icons mt-1 text-white">close</i></button>
    </div>
    <card class="w-[32rem]">
        <!-- Header -->
        <header class="flex font-light text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2" viewBox="0 0 24 24" stroke="#b91c1c">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
            <p class="text-white">Información de perfil</p>
        </header>
        <!-- Title -->
        <h2 class="font-bold text-xl mt-2 text-white">
            {{$name}}
        </h2>
        <!-- Description -->
        <h3 class="font-bold text-xl mt-8 text-white">Datos:</h3>
        <p class="text-white px-6 text-lg"> Edad:{{$edad}}</p>
        <p class="text-white px-6 text-lg">Opcion esperada:{{$carrera}}</p>
        <p class="text-white px-6 text-lg flex">Motivo:{{$interes}}</p>
        </p>
    </card>
</div>