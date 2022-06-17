<div class="flex flex-wra w-11/12 pb-12 mx-auto">
    <div class="basis-full h-auto  pb-4 -ml-4 bg-white rounded-xl pt-4">
        <h1 class="text-gray-900 text-center text-2xl font-bold">Registro de actividad:</h1>
        <p class="mt-10 px-12 text-gray-900 text-justify text-lg font-semibold">Todo lo que haces se queda guardado en un pequeño historial por si se te olvida algo y quieres comprobar si realmente realizaste alguna actividad</p>
        @foreach ($historial as $object)
        <div class="pt-10 px-12">
            <p class="mt-1 text-gray-900 text-justify font-semibold">.- {{$object->historial}}</p>
        </div>
        
        @endforeach
    </div>
</div>