<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg p-6">
        <p class="text-center font-bold text-xl text-gray-900">Como te van a reconocer</p>
        <form class="px-10">
            <div>
                <label for="edad" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Cuantos años
                    tienes</label>
                <input type="number" name="edad" id="edad" wire:model="edad" required class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 border-4 border-indigo-500/100" />
            </div>
            <div class="mt-6">
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="carrera">
                    Carrera a elegir
                </label>
                <div class="relative">
                    <select name="carrera" wire:model="carrera" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 border-4 border-indigo-500/100" id="carrera">
                        <option disabled selected>Que te gustaria estudiar</option>
                        <option value="Ingenieria Electrónica">Ingenieria Electrónica</option>
                        <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                        <option value="Ingenieria en Electromecánica">Ingenieria en Electromecánica</option>
                        <option value="Ingenieria en Energias Renovables">Ingenieria en Energias Renovables</option>
                        <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
                    </select>
                </div>
                <div class="mt-6">
                    <label for="interes" class="text-sm text-gray-600 dark:text-gray-200">Por que elegiste esa
                        especialidad</label>
                    <textarea type="text" wire:model="interes" name="interes" id="interes" placeholder="Lo elegí por que...." required class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-400 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 border-4 border-indigo-500/100"></textarea>
                </div>

                <div class="mt-6">
                    <button wire:click="store()" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-800 hover:bg-indigo-700">
                        Actualizar datos
                    </button>
                </div>
        </form>
    </div>
</div>