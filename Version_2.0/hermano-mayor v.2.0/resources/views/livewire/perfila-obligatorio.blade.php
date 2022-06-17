<div>
    {{-- Be like water. --}}
    <div class="container mx-auto lg:mt-5 sm:mt-8">
        @if(count($new)>0)
        <div class="w-full flex flex-wrap h-full  lg:space-x-2 md:space-x-2 lg:space-y-0 md:space-y-0 sm:space-y-2">
            <div class=" px-4 lg:basis-2/3 md:basis-6/12 pb-4 sm:basis-11/12 bg-white  lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 rounded-xl">
                <h1 class="lg:text-center md:text-justify pt-6 font-extrabold text-indigo-800 lg:text-5xl md:text-4xl sm:text-3xl">Hola Asesor!!!</h1>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-xl font-bold">Me alegra que todo este bien por aqui, a continuacion se te proporcionara la siguiente guia:</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- Asigna las actividades adecuadas a tus nuevos miembros que vayas a conseguir</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- Pueder ver el perfil de tus aspirantes y ver su progreso</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- Si tienes alguna idea, sobre una actividad para tu grupo o general puedes hacer una solicitud, y el personal administrativo te avisara si es valida o no la propuesta</p>
                <p class="pl-10 mt-2 lg:text-left text-gray-900 md:text-justify lg:text-basic">- No seas malo, orienta con responsabilidad, disfrute la experiencia</p>
            </div>
            <div class="lg:basis-1/3 md:basis-6/12 sm:basis-11/12 bg-white  rounded-xl px-8 pb-2">
                <h1 class="text-justify font-black text-indigo-800 pt-6 lg:text-3xl md:text-2xl sm:text-xl">¿Sabías que?</h1>
                
                
                <br><p class="text-justify text-gray-900">El 80% de los estudiantes que terminan su preparatoria, saben qué estudiar, mientras que el 20%, no tiene ni la mínima idea si seguir estudiando o no.</p>
                <br><p class="text-justify text-gray-900">Ayudalos a poder encontrar alguna carrera segun sus habilidades.</a></p>
            </div>
        </div>
        @else
        <div class="w-full flex flex-wrap h-full">
            <div class="lg:basis-11/12 mx-auto pb-6 rounded-md md:basis-11/12 sm:basis-11/12 bg-white">
                <h1 class="lg:text-center md:text-center sm:text-center pt-6 font-extrabold text-indigo-800 lg:text-5xl md:text-4xl sm:text-3xl">Para empezar</h1>
                <p class="pl-10 mt-1 lg:text-left text-gray-900 md:text-justify lg:text-xl font-bold">Gracias por registrarte a nuestra plataforma, a continuación, verifica lo siguiente</p>
                <div class="flex flex-wrap px-6">
                    <div class="lg:basis-6/12 md:basis-full sm:basis-full">
                        <br><p class="px-5 mt-1 text-justify text-gray-900">Un asesor es capaz de orientar a los alumnos que quieran ingresar en el plantel, como parte de tu trabajo deberas ayudarlo a escojer adecuadamente que carrera estudiar</p>
                        <br><p class="px-5 mt-1 text-gray-900 text-justify">Recuerda, que tu  debes ser amigable con tus compañeros que reclutes, como si fueses un hermano mayor, donde eres responsable de lo que haces y dices. Bien, primero completemos tu perfil.</p>
                        <div class="w-5/12 mx-auto mt-8">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="mostrar">Completa tu perfil</button>
                        </div>
                    </div>
                    <div class="lg:basis-6/12 md:basis-full sm:basis-full">
                        @if($createMode)
                            @include('perfila.create')
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
