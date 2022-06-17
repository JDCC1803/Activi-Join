<form class="w-11/12 mx-auto" action="/curso" method="POST">
        @csrf
        <input type="hidden" name="carrera" value="{{$carrera}}">
        <input type="hidden" name="tema" value="{{$tema}}">
        <input type="hidden" name="descripcion" value="{{$descripcion}}">
        <input type="hidden" name="estado" value="Pendiente">
        <input type="hidden" name="finalizado" value="No finalizado">
        <input type="hidden" name="historial2" value="'{{$nombre}}', te asigno una nueva actividad '{{$tema}}'">
        <label class="block mb-2 text-lg text-gray-800 dark:text-gray-200">Escoja a su estudiante:</label>
        <select  name="prospecto_id"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="especialidad">
                @foreach($nuevo as $object)
                <option value="{{$object->user_id}}">{{$object->name}}</option>
                @endforeach
        </select>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Agregar</button>
</form>