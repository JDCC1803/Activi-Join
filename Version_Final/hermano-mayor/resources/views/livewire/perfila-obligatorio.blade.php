<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">
            @if(count($new)>0)
            <!--Nav-->
            <!--Posts Container-->
            <div class="flex flex-wrap justify-between pt-12 -mx-6">
                <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg ">
                        <div class="flex flex-wrap no-underline hover:no-underline">
                            <div class="w-full font-extrabold text-indigo-800 text-5xl px-6 p-4 text-center">Hola Asesor!!!
                            </div>
                            <p class="text-gray-500 text-base px-6 mb-5">
                                Me alegra que todo este bien por aqui, a continuacion se te proporcionara la siguiente guia:
                            </p>
                            <p class="text-black text-base px-6 mb-5">
                                Pequeñas instrucciones:
                            <p class="text-gray-600 text-base px-6 mb-5">
                                - Asigna las actividades adecuadas a tus nuevos miembros que vayas a conseguir.<br><br>
                                - Pueder ver el perfil de tus aspirantes y ver su progreso.<br><br>
                                - Si tienes alguna idea, sobre una actividad para tu grupo o general puedes hacer una solicitud, y el personal administrativo te avisara si es valida o no la propuesta.<br><br>
                                - No seas malo, orienta con responsabilidad, disfrute la experiencia
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 ">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">Capacitor</p>
                        </div>
                    </div>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <div class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://eresmama.com/wp-content/uploads/2016/10/o-ABANDONO-ESCOLAR-facebook-1600x800.jpg" class="h-full w-full rounded-t pb-6">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">Estadistica.</p>
                            <p class="font-bold text-xl text-gray-900 px-6 mb-5">
                                ¿Sabías que?
                            </p>
                            <div class="w-full px-6">
                                <p class="text-gray-800  text-base px-6 mb-5">El 80% de los estudiantes que terminan su preparatoria, saben qué estudiar, mientras que el 20%, no tiene ni la mínima idea si seguir estudiando o no.</p>
                                <p class="text-gray-800  text-base px-6 mb-5">Ayudalos a poder encontrar alguna carrera segun sus habilidades.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">Avisos</p>
                        </div>
                    </div>
                </div>
                <!--1/2 col -->
                <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://th.bing.com/th/id/R.8d79e058060bbd7169c7c9433552f41c?rik=979an%2fX0qc76Iw&pid=ImgRaw&r=0" class="h-full w-full rounded-t pb-6">
                            <div class="w-full font-bold text-xl text-gray-900 px-6 ">Forma de trabajo.
                            </div>
                            <p class="text-gray-500  text-base px-6 mb-5">
                                Nuestra modalidad de “Hermano mayor”, tendrás un trato
                                amigable, con el cual, podrás tener ayuda para tomar buenas decisiones y
                                elegir bien tu próxima carrera, y así asegurar tu título profesional.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm"><button>Completar perfil</button></p>
                        </div>
                    </div>
                </div>
                <!--1/2 col -->
                <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://itesp.edu.mx/Planeacion/img/052.jpg" class="h-full w-full rounded-t pb-6">
                            <div class="w-full font-bold text-xl text-gray-900 px-6">Calendario de actividades
                            </div>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">@2022</p>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="flex flex-wrap justify-between pt-12 -mx-6">
                <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <div class="flex flex-wrap no-underline hover:no-underline">
                            <div class="w-full font-extrabold text-indigo-800 text-5xl px-6 p-4">Para empezar.
                            </div>
                            <p class="text-gray-500 text-base  px-6 mb-5">
                                Gracias por registrarte a nuestra plataforma, a continuación, verifica lo siguiente:
                            </p>
                            <p class="text-gray-500 text-base  px-6 mb-5">
                                - Un asesor es capaz de orientar a los alumnos que quieran ingresar en el plantel, como parte de tu trabajo deberas ayudarlo a escojer adecuadamente que carrera estudiar.
                            </p>
                            <p class="text-gray-500 text-base  px-6 mb-5">
                                - Recuerda, que tu debes ser amigable con tus compañeros que reclutes, como si fueses un hermano mayor, donde eres responsable de lo que haces y dices. Bien, primero completemos tu perfil.
                            </p>
                        </div>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm"><button class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10" wire:click="mostrar">Completa tu perfil</button></p>
                        </div>
                    </div>
                </div>
                <!--1/3 col -->
                @if($createMode)
                @include('perfila.create')
                @endif
                <!--1/2 col -->
                @endif
            </div>
        </div>
    </div>
</div>