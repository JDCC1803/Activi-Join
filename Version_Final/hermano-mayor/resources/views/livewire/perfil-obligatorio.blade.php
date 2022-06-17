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
                            <div class="w-full font-extrabold text-indigo-800 text-5xl px-6 p-4 text-center">Hola bienvenido!!!
                            </div>
                            <p class="text-gray-500 text-base  px-6 mb-5">
                                Nosotros podemos ayudarte a conocer en que carrera podrias encarjar bien.
                            </p>
                            <p class="text-black text-base  px-6 mb-5">
                                Pequeñas instrucciones:
                            <p class="text-gray-600 text-base  px-6 mb-5">
                                - Puedes cambiar y/o actualizar tu perfil a tu gusto, asi como la preferencia que elegiste para estudiar.<br><br>
                                - Las actividades son asignadas por tu asesor, el cual, puedes aceptar o rechazar dicha actividad, bajo tu propia responsabilidad.<br><br>
                                - Tus registros se quedan guardados y puedes ver los logros de tu perfil.<br><br>
                                - Se libre de administrar tu perfil, actividades y etc.
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 ">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">Capacitacion</p>
                        </div>
                    </div>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <div class="flex flex-wrap no-underline hover:no-underline">
                            <img src="https://i0.wp.com/suresteinforma.com/wp-content/uploads/2017/09/4-4T5A2909-e1506722683150.jpg?resize=800%2C445" class="h-full w-full rounded-t pb-6">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">Eventos proximos</p>
                            <p class="font-bold text-xl text-gray-900 px-6 mb-5">
                                Actividades pendientes.
                            </p>
                            @if(count($pen)>0)
                            <div class="w-full px-6">
                                @foreach($pen as $object)
                                <p class="text-gray-800  text-base px-6 mb-5">*{{$object->tema}}</p>
                                @endforeach
                                <a class="bg-cyan-600 rounded-full px-6 mb-5" href="{{route('actividad.index')}}">Ver lista</a>
                            </div>
                            @else
                            <br>
                            <p class="text-justify text-gray-900 px-6 mb-5">Aun no te han asignado actividades por realizar, puede que no tengas asesor aun solicita uno <a href="#my-modal-2" class="text-red-600"><b>aqui.</b></a>
                            <div class="modal" id="my-modal-2">
                                <div class="modal-box">
                                    <h3 class="font-bold text-lg">Solicitud!</h3>
                                    <p class="py-4">Solicitud enviada, espere su actividad!</p>
                                    <div class="modal-action">
                                        <a href="#" class="btn border border-transparent text-base bg-indigo-800 hover:bg-indigo-700">Aceptar</a>
                                    </div>
                                </div>
                            </div>
                            </p>
                            <br>
                            <p class="text-justify text-gray-900 px-6 mb-5">No tienes ninguna actividad, por que aceptaste todas o tu asesor aun no te asigna uno :)</a></p>
                            @endif
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
                                Gracias por registrarte a nuestra plataforma, a continuación, verifica lo siguiente
                            </p>
                            <p class="text-gray-500 text-base  px-6 mb-5">
                                Primero que nada, debes saber que tu, propones tus metas. Te ofrecemos ayuda para que
                                puedas elegir la carrera que te gusta, basandonos en algunas actividades que nosotros
                                los asesores te proporcionaremos mas adelante.
                            </p>
                            <p class="text-gray-500 text-base  px-6 mb-5">
                                Una vez dicho esto, por favor, se amable de completar tu perfil para que puedas comenzar
                                a explorar por la aplicación.
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
                @include('perfilp.create')
                @endif
                <!--1/2 col -->
                @endif
            </div>
        </div>
    </div>
</div>