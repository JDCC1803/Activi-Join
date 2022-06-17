<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="w-11/12 mx-auto flex flex-wrap h-full bg-white rounded-xl">
        <div class="basis-full">
            <h1 class="py-4 text-center text-2xl font-bold">Actividades Asignadas</h1>
        </div>
        <div class="w-full mx-auto flex-row-reverse overflow-auto flex flex-wrap">
            <div class="lg:basis-4/12 pb-8 pr-8 md:basis-8/12 sm:basis-full">
                <h1 class="text-center text-xl font-semibold">Vista previa</h1>
                @if($verAc)
                @include('actividad.show')
                @endif
            </div>
            <div class="px-8 lg:basis-8/12 md:basis-full sm:basis-full lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 ">
                <div class="w-full mt-12">
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Tema</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Dirigido</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Estado</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach($ver as $object)
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4 bg-blue-400 border-b border-l border-[#E8E8E8]">{{$object->tema}}</td>
                                    <td class=" w-1/3 text-left py-3 px-4 bg-blue-200 border-b border-[#E8E8E8]">{{$object->name}}</td>
                                    <td class="text-left py-3 px-4 bg-blue-400 border-b border-l border-[#E8E8E8]">{{$object->estado}}</td>
                                    <td class="text-left py-3 px-4 bg-blue-200 border-b border-[#E8E8E8]"><button class="bg-green-700 rounded-full px-2" wire:click="detalle({{$object->id}})"><i class="material-icons mt-1 text-white">remove_red_eye</i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        
    </div>

</div>
