@if(@Auth::user()->hasRole('asesor'))
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
                            Inicio
                        </a>
                        @endauth
                @endif
                <a href="{{ route('perfila.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Perfil
                </a>
                <a href="{{ route('hijo.create') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Tu grupo
                </a>
                <a href="{{ route('curso.create') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white text-lg">
                    Asignar actividad
                </a>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white text-lg">
                    Cerrar Sesión
                </a>
                </form>
            </div>
        </div>
    </nav>
@endif
@if(@Auth::user()->hasRole('novato'))
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
                            Inicio
                        </a>
                        @endauth
                @endif
                
                <a href="{{route('perfilp.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Perfil
                </a>
                <a href="{{route('actividad.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Ver Actividades
                </a>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white text-lg">
                    Cerrar Sesión
                </a>
                </form>
            </div>
        </div>
    </nav>
@endif
@if(@Auth::user()->hasRole('superadmin'))
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
                            Inicio
                        </a>
                        @endauth
                @endif
                
                <a href="#nosotros" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Perfil
                </a>
                <a href="#servicio" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 text-lg">
                    Ver Actividades
                </a>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white text-lg">
                    Cerrar Sesión
                </a>
                </form>
            </div>
        </div>
    </nav>
@endif
