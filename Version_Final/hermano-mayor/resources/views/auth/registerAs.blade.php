<x-guest-layout>
    <!-- component -->
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center ">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-indigo-800 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                <div class="card bg-indigo-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                    <label for="" class="block mt-3 text-4xl text-gray-700 text-center font-semibold">
                        Registrate
                    </label>
                    <form method="POST" action="{{ route('registerAs') }}" class="mt-10">
                        @csrf
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div for="name">
                            <input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Nombres" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-7" for="email">
                            <input id="email" type="email" name="email" :value="old('email')" require autofocus placeholder="Correo electronico" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-7" for="password">
                            <input id="password" type="password" name="password" required aoutfocus placeholder="Contraseña" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-7" for="password_confirmation">
                            <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirmar contraseña" autofocus class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>
                        <input id="type" type="hidden" name="type" value="A" required>


                        <div class="mt-7">
                            <button class="bg-indigo-800 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Registrarse
                            </button>
                        </div>
                        <div class="mt-7">
                            <div class="flex justify-center items-center">
                                <label class="mr-2">¿Ya tienes una cuenta?</label>
                                @if (Route::has('login'))
                                <a href="{{ route('login') }}" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    Iniciar sesion
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