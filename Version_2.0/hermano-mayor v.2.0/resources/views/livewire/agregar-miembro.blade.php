<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="lg:w-3/12 sm:w-5/12 mx-auto my-8">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
            wire:click="migrupo">Mis miembros</button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
            wire:click="agregar">Agregar a tu grupo</button>
    </div>
    @if($verMode)
        @include('hijo.show')
    @endif
    @if($agregarMode)
        @include('hijo.agregar')
    @endif
</div>