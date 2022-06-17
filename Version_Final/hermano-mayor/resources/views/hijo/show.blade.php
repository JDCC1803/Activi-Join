@if(count($nuevo)>0)
<div class="w-11/12 mx-auto flex flex-wrap h-full bg-white rounded-xl">
    <div class="basis-full">
        <h1 class="py-4 text-center text-2xl font-bold">Echa un viztaso a los miembros de tu equipo</h1>
    </div>
    <div class="min-w-full overflow-auto mx-auto flex-row-reverse flex flex-wrap">
        <div class="lg:basis-4/12 pr-8 md:basis-8/12 sm:basis-full">
            <h1 class="text-center text-xl font-semibold">Vista previa</h1>
            @if($mostrarUs)
            @include('hijo.mostrar')
            @endif
        </div>
        <div class="px-8 lg:basis-8/12 md:basis-full sm:basis-full lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 ">
            <div class="bg-white py-4">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-indigo-800 p-6 text-center">
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Nombre</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Estado</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Actividades Aceptadas</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Actividades Rechazadas</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach($nuevo as $object)
                        <tr>
                            <td class="text-left py-3 px-4 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">{{$object->name}}</td>
                            <td class="text-left py-3 px-4 bg-white border-b border-[#E8E8E8]">{{$object->estado}}</td>
                            <td class="text-left py-3 px-4 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">{{$object->bien}}</td>
                            <td class="text-left py-3 px-4 bg-white border-b border-[#E8E8E8]">{{$object->mal}}</td>
                            <td class="text-left py-3 px-4 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]"><button class="bg-green-700 rounded-full px-2" wire:click="edit({{$object->user_id}})"><i class="material-icons mt-1 text-white">remove_red_eye</i></button> <button class="bg-red-500 rounded-full px-2" wire:click.prevent="delete({{$object->user_id}})"><i class="material-icons mt-1 text-white">delete_sweep</i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
@else
<div class="w-11/12 mx-auto flex flex-wrap h-full  lg:space-x-2 md:space-x-2 lg:space-y-0 md:space-y-0 sm:space-y-2">
    <div class="px-4 basis-full h-auto bg-white   lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 rounded-xl">
        <h1 class="lg:text-center md:text-justify pt-6 font-extrabold text-indigo-800 lg:text-5xl md:text-4xl sm:text-3xl p-6">
            Aun no haz registrado a un miembro en tu lista, ve a la seccion de agregar...</h1>
    </div>
</div>
<br>
@endif