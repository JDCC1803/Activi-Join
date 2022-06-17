<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="pt-12 pb-8 w-full text-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="historial">Ver historial</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" wire:click="logros">Ver mis logros</button>
    </div>
    <div class="w-11/12 mx-auto lg:mt-5 sm:mt-8">
        @if($historialMode)
            @include('perfila.historial')
        @endif
        @if($logrosMode)
            @include('perfila.logros')
        @endif
    </div>
</div>
