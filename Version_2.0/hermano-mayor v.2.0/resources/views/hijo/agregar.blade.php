<div class="w-11/12 mx-auto flex flex-wrap  lg:space-x-2 md:space-x-2 lg:space-y-0 md:space-y-0 sm:space-y-2">
    <div class="px-4 py-10 basis-full h-auto bg-white   lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 rounded-xl">
        <p class="text-xl pt-3 pl-3 text-center"><b>Usuarios disponibles para agregar:</b></p>
        <div class="w-full flex flex-wrap ml-6 items-baseline h-full mt-10 space-x-8 space-y-4">
            @foreach($ver as $object)
            <div class="basis-3/12  bg-green-300 rounded-xl h-96 max-h-max text-left py-4">
                <h1 class="text-gray-900 px-6 text-lg font-bold">Imagen de perfil</h1>
                <p class="text-gray-900 px-6 text-base"><b>Nombre:</b> {{$object->name}}</p>
                <p class="text-gray-900 px-6 text-base"><b>Edad:</b> {{$object->edad}}</p>
                <p class="text-gray-900 px-6 text-base"><b>Opcion esperada:</b> {{$object->carrera}}</p>
                <p class="text-gray-900 px-6 text-base"><b>Motivo:</b> {{$object->interes}}</p>
                <div class="w-3/12 mx-auto py-12">
                    <form method="POST" action="/hijo">
                        @csrf
                        <input type="hidden" name="id" value="{{$object->id}}">
                        <input type="hidden" name="user_id" value="{{$object->user_id}}">
                        <input type="hidden" name="estado" value="En curso">
                        <input type="hidden" name="historial" value="Haz agregado a '{{$object->name}}', como miembro de tu equipo">
                        <input type="hidden" name="historial2" value="'{{$nombre}}', te eligio para ser tu asesor">
                        <input type="hidden" name="name" value="{{$object->name}}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Agregar</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>   
</div>