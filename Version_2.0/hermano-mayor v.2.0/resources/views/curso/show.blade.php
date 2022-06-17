<div class="w-11/12 mx-auto flex flex-wrap h-full bg-white rounded-xl">
    <div class="basis-full"><h1 class="py-4 text-center text-2xl font-bold">Actividades Asignadas</h1></div>
    <div class="w-full mx-auto flex-row-reverse flex flex-wrap">
        <div class="lg:basis-4/12 pb-8 pr-8 md:basis-8/12 sm:basis-full">
            <h1 class="text-center text-xl font-semibold">Vista previa</h1>
            @if($verAc)
                @include('curso.misAc')
            @endif     
        </div>
        <div class="px-8 lg:basis-8/12 md:basis-full sm:basis-full lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 ">
            <div class="bg-white py-4">
                <table class="w-11/12 bg-blue-400">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tema</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Dirigido</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Estado</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($mio as $object)
                        <tr>
                            <td class="text-left py-3 px-4">{{$object->tema}}</td>
                            <td class="text-left py-3 px-4">{{$object->name}}</td>
                            <td class="text-left py-3 px-4">{{$object->estado}}</td>
                            <td class="text-left py-3 px-4"><button class="bg-green-700 rounded-full px-2" wire:click="misAc({{$object->id}})"><i class="material-icons mt-1 text-white">remove_red_eye</i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>