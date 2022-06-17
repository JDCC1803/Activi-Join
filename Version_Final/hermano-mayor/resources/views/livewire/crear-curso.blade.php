<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="lg:w-3/12 sm:w-5/12 mx-auto my-8">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="viewact">Todas la actividades</button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="misact">Asignadas</button>
    </div>
    @if($agregarMode)
        @include('curso.agregar')
    @endif
    @if($verMode)
        @include('curso.show')
    @endif
</div>
