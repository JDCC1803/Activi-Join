<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <!-- component -->
    <!-- This is an example component -->
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center  ">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-indigo-800 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                <div class="card bg-indigo-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                    <label for="" class="block mt-3 text-4xl text-gray-700 text-center font-semibold">
                        Inciar Sesion
                    </label>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('login') }}" class="mt-10">
                        @csrf
                        <div for="email">
                            <input id="email" type="email" name="email" :value="old('email')" aoutfocus placeholder="Correo electronico" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-7" for="password">
                            <input id="password" type="password" name="password" required aoutfocus autocomplete="current-password" placeholder="Contraseña" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-7 flex">
                            <label for="remember_me" class="inline-flex items-center w-full cursor-pointer">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">
                                    Recuerdame
                                </span>
                            </label>

                            <div class="w-full text-right">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    ¿Olvidó su contraseña?
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="mt-7">
                            <button class="bg-indigo-800 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Login
                            </button>
                        </div>
                        <div class="mt-7">
                            <div class="flex justify-center items-center">
                                <label class="mr-2">¿Eres nuevo?</label>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    Crea una cuenta
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>