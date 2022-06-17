<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="container mx-auto lg:mt-5 sm:mt-8">
        @if(count($new)>0)
        <div class="w-full flex flex-wrap h-full  lg:space-x-2 md:space-x-2 lg:space-y-0 md:space-y-0 sm:space-y-2">
            <div class=" px-4 lg:basis-2/3 md:basis-6/12 pb-4 sm:basis-11/12 bg-white  lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 rounded-xl">
                <h1 class="lg:text-center md:text-justify pt-6 font-extrabold text-indigo-800 lg:text-5xl md:text-4xl sm:text-3xl">Hola Novato!!!</h1>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-xl font-bold">Nosotros podemos ayudarte a conocer en que carrera podrias encarjar bien</p>
                <p class="pl-10 mt-2 text-center text-gray-900  lg:text-2xl font-bold">Pequeñas instrucciones:</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- Puedes cambiar y/o actualizar tu perfil a tu gusto, asi como la preferencia que elegiste para estudiar</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- Las actividades son asignadas por tu asesor, el cual, puedes aceptar o rechazar dicha actividad, bajo tu propia responsabilidad</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- Tus registros se quedan guardados y puedes ver los logros de tu perfil</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- Se libre de administrar tu perfil, actividades y etc.</p>
            </div>
            <div class="lg:basis-1/3 md:basis-6/12 sm:basis-11/12 bg-white  rounded-xl px-8 pb-2">
                <h1 class="text-justify font-black text-indigo-800 pt-6 lg:text-3xl md:text-2xl sm:text-xl">Actividades pendientes</h1>
                
                @if(count($pen)>0)
                <p class="text-justify text-gray-900">Ejemplo de tareas</p>
                @else
                <br><p class="text-justify text-gray-900">Aun no te han asignado actividades por realizar, puede que no tengas asesor aun solicita uno <a href="#" class="text-red-600"><b>aquí.</b></a></p>
                <br><p class="text-justify text-gray-900">No tienes ninguna actividad, por que aceptaste todas o tu asesor aun no te asigna uno :)</a></p>
                @endif
            </div>
        </div>
        @else
        <div class="w-full flex flex-wrap h-full">
            <div class="lg:basis-11/12 mx-auto pb-6 rounded-md md:basis-11/12 sm:basis-11/12 bg-white">
                <h1 class="lg:text-center md:text-center sm:text-center pt-6 font-extrabold text-indigo-800 lg:text-5xl md:text-4xl sm:text-3xl">Para empezar</h1>
                <p class="pl-10 mt-1 lg:text-left text-gray-900 md:text-justify lg:text-xl font-bold">Gracias por registrarte a nuestra plataforma, a continuación, verifica lo siguiente</p>
                <div class="flex flex-wrap px-6">
                    <div class="lg:basis-6/12 md:basis-full sm:basis-full">
                        <br><p class="px-5 mt-1 text-justify text-gray-900">Primero que nada, debes saber que tu, propones tus metas. Te ofrecemos ayuda para que puedas elegir la carrera que te gusta, basandonos en algunas actividades que nosotros los asesores te proporcionaremos mas adelante.</p>
                        <br><p class="px-5 mt-1 text-gray-900 text-justify">Una vez dicho esto, por favor, se amable de completar tu perfil para que puedas comenzar a explorar por la aplicación.</p>
                        <div class="w-5/12 mx-auto mt-8">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="mostrar">Completa tu perfil</button>
                        </div>
                    </div>
                    <div class="lg:basis-6/12 md:basis-full sm:basis-full">
                        @if($createMode)
                            @include('perfilp.create')
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    
</div>
