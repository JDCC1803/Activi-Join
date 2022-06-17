<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg p-6">
        <p class="px-5  text-center font-bold text-xl text-gray-900">Esto ayudara a los nuevos a reconocerte.</p>
        <form class="px-10">
            <div>
                <label for="descripcion" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Cual es tu hobby:</label>
                <textarea type="text" name="descripcion" id="descripcion" wire:model="descripcion" required class="  border-4 border-indigo-500/100 block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white  rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"></textarea>
            </div>
            <div class="mt-6">
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="especialidad">
                    Carrera que actualmente cursas:
                </label>
                <div class="relative">
                    <select name="especialidad" wire:model="especialidad" class="  border-4 border-indigo-500/100 block appearance-none w-full bg-gray-200  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="especialidad">
                        <option disabled selected>Seleccione una opción</option>
                        <option value="Ingenieria Electrónica">Ingenieria Electrónica</option>
                        <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                        <option value="Ingenieria en Electromecánica">Ingenieria en Electromecánica</option>
                        <option value="Ingenieria en Energias Renovables">Ingenieria en Energias Renovables</option>
                        <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
                    </select>
                </div>
            </div>
            <div class="mt-6">
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="carrera">
                    Semestre en que estas cursando:
                </label>
                <div class="relative">
                    <select name="grado" wire:model="grado" class="  border-4 border-indigo-500/100 block appearance-none w-full bg-gray-200  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grado">
                        <option disabled selected>Selecciona tu semestre</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>
            <div class="mt-6">
                <label for="grupo" class="text-sm text-gray-600 dark:text-gray-200">
                    Grupo que pertenece:</label>
                <input type="text" wire:model="grupo" name="grupo" id="grupo" required class=" border-4 border-indigo-500/100 block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white rounded-md dark:placeholder-gray-400 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>
            <div class="mt-6">
                <button wire:click="store()" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-800 hover:bg-indigo-700">
                    Cargar datos
                </button>
            </div>
        </form>
    </div>

</div>