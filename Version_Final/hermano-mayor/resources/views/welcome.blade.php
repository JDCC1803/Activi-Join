<html>

<head>
    <title>CapaciTEC</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: Nunito Sans;
        }

        .card {
            transition: .4s;
        }

        .card:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
            transform: translate(0px, -12px);
            transition: .6s;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 30px;
        }

        .social-icons .fa {
            transition: .4s;
            font-size: 40px;
            padding-right: 15px;
        }

        .social-icons .fa:hover {
            transform: scale(1.3);
            transition: .6s;
        }

        .fa-facebook-square,
        .fa-linkedin {
            color: #fff;
        }

        .fa-twitter {
            color: #1DA1F2;
        }

        .fa-instagram {
            color: #e4405f;
        }

        .fa-pinterest-square {
            color: #bd081c;
        }

        @media(max-width: 430px) {
            .card {
                margin: 10px;
            }

            .d-none {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="flex items-center justify-between flex-wrap bg-indigo-800 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
            </svg>
            <span class="font-semibold text-xl tracking-tight">CapaciTEC</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-100 border-teal-400 hover:text-white hover:border-white" id="navbar-btn">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto " id="navbar">
            <div class="text-sm lg:flex-grow  text-center lg:text-right">
                @if (Route::has('login'))
                @auth
                <a href="{{url('/dashboard')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Menu
                </a>
                @endauth
                @endif

                <a href="#nosotros" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Sobre nosotros
                </a>
                <a href="#servicio" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Servicio
                </a>
                <a href="#equipo" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white text-lg">
                    Equipo
                </a>
                <a href="#contacto" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-teal-100 text-lg">
                    Contacto
                </a>
            </div>
        </div>
    </nav>
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                        </div>
                    </nav>
                </div>
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 pt-8 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">CapaciTEC</span><br class="d-none">
                            <span class="block text-indigo-800 xl:inline">Estudiantes</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Tus talentos y habilidades irán mejorando con el tiempo, pero para eso has de empezar (Martin Luther King).
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-800 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Iniciar sesion
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Registrarse
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <br>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://www.acquamarket24.it/wp-content/uploads/2020/08/imprenditore.jpg" alt="">
        </div>
    </div>
    <div id="nosotros">
        <div class="text-center">
            <h1 class="text-5xl pt-10 pb-5 text-black">Sobre nosotros</h1>
        </div>
        <div class="container mx-auto flex flex-wrap mb-8 justify-center">
            <div class="px-6 py-4">
                <p class="text-black text-xl text-cente">
                 Ofrecemos métodos y estrategias para motivar a los aspirantes, saber qué es lo que deberían estudiar, ofreciendo ayuda por parte de otras personas que serán encargadas de orientar al estudiante a tomar la elección correcta, ofreciendo guías y actividades que puedan fortalecer sus ideas sobre que carrera tomar.
                </p>
            </div>
        </div>
    </div>
    <div class="text-center" id="servicio">
        <h1 class="text-5xl">Servicio</h1>
    </div>
    <div class="container mx-auto flex flex-wrap my-8 justify-center">
        <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-4">
            <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded card bg-indigo-800  hover:bg-indigo-900">
                <div class="px-6 py-4 text-center text-white">
                    <i class="fa fa-cog text-center text-3xl "></i>
                    <h1 class="font-bold mb-2 text-center text-2xl text-white">Forma de trabajo</h1>
                    <p class=" text-base">
                        Gracias a nuestra modalidad de “Hermano mayor”, tendrás un trato amigable, con el cual, podrás tener ayuda para tomar buenas decisiones.
                    </p>
                </div>
            </div>
            <div class="max-w-sm  overflow-hidden shadow-xl cursor-pointer rounded card bg-indigo-800  hover:bg-indigo-900">
                <div class="px-6 py-4 text-center text-white">
                    <i class="fa fa-cog text-3xl"></i>
                    <h1 class="font-bold mb-2 text-center text-2xl text-white">Logro</h1>
                    <p class=" text-base">
                        Mas allá de perseguir tus sueños, en esta actualidad, es mejor que 
                        aprendas algo que realmente te guste, sin miedo a preocupaciones por elegir 
                        una carrera incorrecta, esto es gracias a nosotros.
                    </p>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded card bg-indigo-800  hover:bg-indigo-900">
                <div class="px-6 py-4 text-center text-white">
                    <i class="fa fa-cog text-white text-3xl"></i>
                    <h1 class="font-bold mb-2 text-center text-2xl text-white">Apoyo</h1>
                    <p class=" text-base">
                    Con nosotros veras lo fácil que es elegir algo que realmente te gusta, sin miedo al éxito ¡¡ <br>
                    ¡¡Que esperas!!, el verdadero discípulo es el que supera al maestro.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center" id="equipo">
        <h1 class="text-5xl pt-10 pb-10">Equipo</h1>
    </div>
    <div class="container mx-auto flex flex-wrap my-8 justify-center">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out">
                <img class="w-full" src="https://th.bing.com/th/id/R.475763781e490786c021f2f8f57bc87a?rik=SEPvooeqfgw0kA&riu=http%3a%2f%2fimages.unsplash.com%2fphoto-1535713875002-d1d0cf377fde%3fcrop%3dentropy%26cs%3dtinysrgb%26fit%3dmax%26fm%3djpg%26ixid%3dMnwxMjA3fDB8MXxzZWFyY2h8NHx8bWFsZSUyMHByb2ZpbGV8fDB8fHx8MTYyNTY2NzI4OQ%26ixlib%3drb-1.2.1%26q%3d80%26w%3d1080&ehk=Gww3MHYoEwaudln4mR6ssDjrAMbAvyoXYMsyKg5p0Ac%3d&risl=&pid=ImgRaw&r=0">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">Josue Daniel</div>
                    <p class=" text-base">
                        Ingeniero en sistemas computacionales.
                        Josue.18070017@itsmotul.edu.mx
                        9911182810
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <span class="inline-block bg-indigo-800 rounded-full px-3 py-1 text-sm font-semibold  mr-2 text-white">#Devloper</span>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded card">
                <img class="w-full" src="https://th.bing.com/th/id/R.475763781e490786c021f2f8f57bc87a?rik=SEPvooeqfgw0kA&riu=http%3a%2f%2fimages.unsplash.com%2fphoto-1535713875002-d1d0cf377fde%3fcrop%3dentropy%26cs%3dtinysrgb%26fit%3dmax%26fm%3djpg%26ixid%3dMnwxMjA3fDB8MXxzZWFyY2h8NHx8bWFsZSUyMHByb2ZpbGV8fDB8fHx8MTYyNTY2NzI4OQ%26ixlib%3drb-1.2.1%26q%3d80%26w%3d1080&ehk=Gww3MHYoEwaudln4mR6ssDjrAMbAvyoXYMsyKg5p0Ac%3d&risl=&pid=ImgRaw&r=0" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">Ismael Canche</div>
                    <p class=" text-base">
                        Ingeniero en sistemas computacionales.
                        Jose.18070012@itsmotul.edu.mx
                        9911183425
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <span class="inline-block bg-indigo-800 rounded-full px-3 py-1 text-sm font-semibold  mr-2 text-white">#Devloper</span>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded card">
                <img class="w-full" src="https://th.bing.com/th/id/R.475763781e490786c021f2f8f57bc87a?rik=SEPvooeqfgw0kA&riu=http%3a%2f%2fimages.unsplash.com%2fphoto-1535713875002-d1d0cf377fde%3fcrop%3dentropy%26cs%3dtinysrgb%26fit%3dmax%26fm%3djpg%26ixid%3dMnwxMjA3fDB8MXxzZWFyY2h8NHx8bWFsZSUyMHByb2ZpbGV8fDB8fHx8MTYyNTY2NzI4OQ%26ixlib%3drb-1.2.1%26q%3d80%26w%3d1080&ehk=Gww3MHYoEwaudln4mR6ssDjrAMbAvyoXYMsyKg5p0Ac%3d&risl=&pid=ImgRaw&r=0">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">Charly Yael</div>
                    <p class=" text-base">
                        Ingeniero en sistemas computacionales.
                        Charly.18070016@itsmotul.edu.mx
                        9911182768
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <span class="inline-block bg-indigo-800 rounded-full px-3 py-1 text-sm font-semibold  mr-2 text-white">#Devloper</span>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <h1 class="text-5xl pt-10 pb-10">Contacto</h1>
    </div>
    <div class=" container mx-auto flex flex-wrap mb-16 justify-center mt-8 overflow-hidden" id="contacto">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6 mr-2 bg-gray-100 bg-indigo-800 sm:rounded-lg">
                <h1 class="text-4xl sm:text-5xl text-white dark:text-white font-extrabold tracking-tight">
                    Contacto con nosotros
                </h1>
                <p class="text-normal text-lg sm:text-2xl font-medium text-white dark:text-gray-400 mt-2">
                    Iniciar una conversación
                </p>
                <div class="flex items-center mt-8 text-white dark:text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                        Motul, Yucatan, Mexico.
                        postal 97430.
                    </div>
                </div>
                <div class="flex items-center mt-4 text-white dark:text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                        +52 9911183456
                    </div>
                </div>
                <div class="flex items-center mt-2 text-white dark:text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                        dibdro@gmail.com
                    </div>
                </div>
                <ul class="social-icons">
                    <li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                    <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                </ul>
            </div>
            <form class="p-6 flex flex-col justify-center">
                <div class="flex flex-col">
                    <label for="name" class="hidden">Nombre conpleto</label>
                    <input type="name" name="name" id="name" placeholder="Nombre conpleto" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" required>
                </div>
                <div class="flex flex-col mt-2">
                    <label for="email" class="hidden">Correo</label>
                    <input type="email" name="email" id="email" placeholder="Correo" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" required>
                </div>
                <div class="flex flex-col mt-2">
                    <label for="tel" class="hidden">Numero</label>
                    <input type="tel" name="tel" id="tel" placeholder="Numero" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" required>
                </div>
                <div class="flex flex-col mt-2">
                    <label for="tel" class="hidden">Mensage</label>
                    <textarea type="text" name="Mes" id="Mes" placeholder="Mensage" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" rows="3" required></textarea>
                </div>
                <button type="submit" class="md:w-32 bg-indigo-800 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                    Enviar
                </button>
            </form>
        </div>
    </div>
    <div class="bg-indigo-900 p-2 pl-6">
        <p class="bottom text-white text-center md:text-left">© Copyright 2021 - www.capacitec.com <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2qU7PQUJfibFUmDmr3YIND2r6Vkm6LvjPtAmdqHXrVgW8KA/viewform?usp=sf_link">Cuestionario</a></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var $window = $(window);

            function checkWindowWidth() {

                var windowsize = $window.width();

                if (windowsize > 1000) {

                    $('#navbar').css('display', 'block');

                } else {

                    $('#navbar').css('display', 'none');

                }
            }

            checkWindowWidth();

            $(window).resize(checkWindowWidth);

        });


        $('#navbar-btn').click(function() {
            $('#navbar').toggle();
        });
    </script>
</body>

</html>