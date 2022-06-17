<div class="w-11/12 mx-auto flex flex-wrap  lg:space-x-2 md:space-x-2 lg:space-y-0 md:space-y-0 sm:space-y-2">
    <div class="px-4 py-10 basis-full h-auto bg-white   lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 rounded-xl">
        <p class="text-xl pt-3 pl-3 text-center"><b>Usuarios disponibles para agregar:</b></p>
        <div class="w-full flex flex-wrap lg:ml-6 items-baseline h-full mt-10 lg:space-x-8  space-y-4">
            @foreach($ver as $object)
            <div class="lg:basis-3/12 md:basis-5/12 sm:basis-11/12 rounded-xl max-h-max text-left py-4 bg-gradient-to-r from-cyan-500 to-indigo-800 p-6">
               
                    <!-- Header -->
                    <header class="flex font-light text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2" viewBox="0 0 24 24" stroke="#b91c1c">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                        <p class="text-white">CapaciTEC</p>
                    </header>
                    <img src="{{ asset('avatar/'.$object->foto)}}" alt="foto de perfil" class="my-4 object-cover rounded-full w-9/12 mx-auto h-60">
                    <!-- Title -->
                    <h2 class="font-bold text-4xl mt-2 text-white py-2">
                        {{$object->name}}
                    </h2>
                    <!-- Description -->
                    <h3 class="font-bold text-base mt-8 text-white">Opcion esperada:</h3>
                    <p class="font-light text-white p-4">{{$object->carrera}}</p>
                    <!-- Button -->
                    <div class="w-3/12 mx-auto">
                        <form method="POST" action="/hijo">
                            @csrf
                            <input type="hidden" name="id" value="{{$object->id}}">
                            <input type="hidden" name="user_id" value="{{$object->user_id}}">
                            <input type="hidden" name="estado" value="En curso">
                            <input type="hidden" name="historial" value="Haz agregado a '{{$object->name}}', como miembro de tu equipo">
                            <input type="hidden" name="historial2" value="'{{$nombre}}', te eligio para ser tu asesor">
                            <input type="hidden" name="name" value="{{$object->name}}">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Agregar</button>
                        </form>
                    </div>
                </card>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br>
