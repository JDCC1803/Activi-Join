<form class="w-11/12 mx-auto" action="/curso" method="POST">
        @csrf
        <input type="hidden" name="carrera" value="{{$carrera}}">
        <input type="hidden" name="tema" value="{{$tema}}">
        <input type="hidden" name="descripcion" value="{{$descripcion}}">
        <input type="hidden" name="estado" value="Pendiente">
        <input type="hidden" name="finalizado" value="No finalizado">
        <input type="hidden" name="historial2" value="'{{$nombre}}', te asigno una nueva actividad '{{$tema}}'">
        <label class="block mb-2 text-lg text-gray-800 dark:text-gray-200">Escoja a su estudiante:</label>
        <select name="prospecto_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="especialidad">
                @foreach($nuevo as $object)
                <option value="{{$object->user_id}}">{{$object->name}}</option>
                @endforeach
        </select>
        <button class="bg-green-600 text-white rounded-full px-2 font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group">
                <p> Asignar actividad </p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
        </button>
</form>