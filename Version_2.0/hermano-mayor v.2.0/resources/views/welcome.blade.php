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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
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
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://th.bing.com/th/id/R.ef031b0917c5230de34d740e3996645d?rik=NRmynC9QiV0HmQ&pid=ImgRaw&r=0" alt="">
        </div>
    </div>
    <div id="nosotros">
        <div class="text-center">
            <h1 class="text-5xl pt-10 pb-5 text-black">Sobre nosotros</h1>
        </div>
        <div class="container mx-auto flex flex-wrap mb-8 justify-center">
            <div class="px-6 py-4">
                <p class="text-black text-xl text-cente">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                    <h1 class="font-bold mb-2 text-center text-2xl text-white">Capacitar</h1>
                    <p class=" text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque.
                    </p>
                </div>
            </div>
            <div class="max-w-sm  overflow-hidden shadow-xl cursor-pointer rounded card bg-indigo-800  hover:bg-indigo-900">
                <div class="px-6 py-4 text-center text-white">
                    <i class="fa fa-cog text-3xl"></i>
                    <h1 class="font-bold mb-2 text-center text-2xl text-white">Evaluar</h1>
                    <p class=" text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque.
                    </p>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded card bg-indigo-800  hover:bg-indigo-900">
                <div class="px-6 py-4 text-center text-white">
                    <i class="fa fa-cog text-white text-3xl"></i>
                    <h1 class="font-bold mb-2 text-center text-2xl text-white">Solicitar</h1>
                    <p class=" text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque.
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
                <img class="" src="https://lh5.googleusercontent.com/proxy/Q0DZOSd2kyPyQWVgLN4fyMtx95_bcIUiTqQCNFLaqFVCGBFwxImzph2t5D5avJxk8usHeN7mSlKYTfCliuY00rfk07TiTS3IgYNa0r4L=s0-d" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">Josue Daniel</div>
                    <p class=" text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <span class="inline-block bg-indigo-800 rounded-full px-3 py-1 text-sm font-semibold  mr-2 text-white">#Devloper</span>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded card">
                <img class="" src="https://lh5.googleusercontent.com/proxy/Q0DZOSd2kyPyQWVgLN4fyMtx95_bcIUiTqQCNFLaqFVCGBFwxImzph2t5D5avJxk8usHeN7mSlKYTfCliuY00rfk07TiTS3IgYNa0r4L=s0-d" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">Ismael Canche</div>
                    <p class=" text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <span class="inline-block bg-indigo-800 rounded-full px-3 py-1 text-sm font-semibold  mr-2 text-white">#Devloper</span>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-xl cursor-pointer rounded card">
                <img class="" src="https://lh5.googleusercontent.com/proxy/Q0DZOSd2kyPyQWVgLN4fyMtx95_bcIUiTqQCNFLaqFVCGBFwxImzph2t5D5avJxk8usHeN7mSlKYTfCliuY00rfk07TiTS3IgYNa0r4L=s0-d" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">Charly Yael</div>
                    <p class=" text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <span class="inline-block bg-indigo-800 rounded-full px-3 py-1 text-sm font-semibold  mr-2 text-white">#Devloper</span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-indigo-900 p-2 pl-6">
        <p class="bottom text-white text-center md:text-left">© Copyright 2021 - www.capacitec.com</p>
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