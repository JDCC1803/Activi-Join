<div class="w-11/12 mx-auto flex flex-wrap h-full bg-white rounded-xl">
    <div class="basis-full"><h1 class="py-4 text-center text-2xl font-bold">Lista de actividades para asignar</h1></div>
    <div class="w-full mx-auto flex-row-reverse flex flex-wrap">
        <div class="lg:basis-4/12 pr-8 md:basis-8/12 sm:basis-full">
            <h1 class="text-center text-xl font-semibold">Vista previa</h1>
            @if($mostrarAc)
                @include('curso.mostrar')
            @endif
        </div>
        <div class="px-8 lg:basis-8/12 md:basis-full sm:basis-full lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 ">
            <div class="bg-white py-4">
                <table class="w-11/12 bg-blue-400">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tipo</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tema</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($ver as $object)
                        <tr>
                            <td class="text-left py-3 px-4">{{$object->carrera}}</td>
                            <td class="text-left py-3 px-4">{{$object->tema}}</td>
                            <td class="text-left py-3 px-4"><button class="bg-green-700 rounded-full px-2" wire:click="show({{$object->id}})"><i class="material-icons mt-1 text-white">remove_red_eye</i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>