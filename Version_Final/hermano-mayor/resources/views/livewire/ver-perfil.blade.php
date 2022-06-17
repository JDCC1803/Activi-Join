<div>
    {{-- Do your work, then step back. --}}
    <div class="pt-12 pb-8 w-full text-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="historial">Ver historial</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="logros">Ver mis logros</button>
    </div>
    <div class="w-11/12 mx-auto lg:mt-5 sm:mt-8">
        @if($historialMode)
            @include('perfilp.historial')
        @endif
        @if($logrosMode)
            @include('perfilp.logros')
        @endif
    </div>
</div>
