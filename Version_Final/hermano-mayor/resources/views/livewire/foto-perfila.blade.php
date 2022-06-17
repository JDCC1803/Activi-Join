<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="relative">
        <button wire:click="abrirModal" class="absolute -bottom-6 right-0"><span
                class="material-icons">border_color</span></button>
        <img src="{{$urlfoto}}" alt="foto de perfil" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
    </div>
    @if($open)
    <div class="transition-opacity ease-in-out delay-150 animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"
        id="modal-id">
        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
        <div class="w-full  max-w-lg px-12 py-10 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
            <!--content-->
            <h3 class="text-2xl mb-3">Selecciona tu foto de perfil</h3>
            <form wire:submit.prevent="save">
                <div>
                    <!--body-->

                    <div class="flex items-center space-x-6">
                        <div class="shrink-0">
                            @if ($photo)
                            <img src="{{ $photo->temporaryUrl() }}" class="h-16 w-16 object-cover rounded-full">
                            @else
                            <img class="h-16 w-16 object-cover rounded-full" src="{{$urlfoto}}"
                                alt="foto por defecto" />
                            @endif

                        </div>
                        <label class="block">
                            <span class="sr-only">Choose profile photo</span>
                            <input type="file" wire:model="photo" class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-yellow-300 file:text-yellow-700
                                        hover:file:bg-yellow-100
                                        " />
                        </label>

                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <!--footer-->
                    <div class="flex gap-4  mt-5 justify-end">
                        <button wire:click="cerrarModal">Cancelar</button>
                        <button>Listo</button>
                    </div>
            </form>
        </div>
    </div>
    <script>
        window.addEventListener('swal:exito', event => {
            swal.fire({
                title: event.detail.message,
                text: event.detail.text,
                icon: event.detail.type,
            });
        });
    </script>
    @endif
</div>
