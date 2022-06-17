<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <!-- Alpine v2 -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Alpine v3 -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.2/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<style>
    body {
        font-family: Nunito Sans;
    }
</style>

<body class="antialiased leading-normal tracking-normal">
    <div class="min-h-screen bg-gray-200">
        @include('layouts.navigation')
        <div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('https://scontent.fmid5-1.fna.fbcdn.net/v/t39.30808-6/283860650_418498903614046_5852577937408291208_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=e3f864&_nc_ohc=tW_uN76WZzkAX8D4cYx&_nc_zt=23&_nc_ht=scontent.fmid5-1.fna&oh=00_AT-4SeBnQnWBS9Pj_YYUtKBOzStZS8Q0XmrHz21pQ1iDbQ&oe=62AD2967'); height: 60vh; max-height:460px;">
            <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
                <!--Title-->
                <p class="text-white font-semibold text-xl md:text-5xl">
                    👻 CapaciTEC
                </p>
                <p class="text-xl md:text-2xl text-white">Bienvenido al sitio.</p>
            </div>
        </div>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <div class="bg-indigo-900 p-2 pl-6">
            <p class="bottom text-white text-center md:text-left">© Copyright 2021 - www.capacitec.com <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2qU7PQUJfibFUmDmr3YIND2r6Vkm6LvjPtAmdqHXrVgW8KA/viewform?usp=sf_link">Cuestionario</a></p>
        </div>
    </div>
    @livewireScripts
    @livewire('livewire-ui-modal')
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
    <script>
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
            title: 'Seguro quieres eliminarlo?',
            text: "Esta acción no se puede revertir.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuar',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
            })
        });
        window.addEventListener('studentDeleted', event => {
            Swal.fire(
                'Eliminado!',
                'Eliminaste a un estudiante de tu grupo :C',
                'success'
            )
        });
        window.addEventListener('activitieFinish', event => {
            Swal.fire(
                'Completado!',
                'La operación se realizó con exito  ',
                'success'
            )
        });
        window.addEventListener('activitieAcepted', event => {
            Swal.fire(
                '¡Bien!',
                'Haz aceptado la actividad 😄',
                'success'
            )
        });
        window.addEventListener('activitieRefused', event => {
            Swal.fire(
                '¡Bueno 😶!',
                'Rechazaste la actividad 😥',
                'error'
            )
        });
    </script>
</body>

</html>