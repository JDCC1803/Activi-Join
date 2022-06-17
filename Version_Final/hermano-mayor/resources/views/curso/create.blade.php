@extends('dashboard')
@section('mayor')
<div class="w-full mx-auto h-auto lg:mt-5 sm:mt-8">
    @livewire('crear-curso')
    @if ($message = Session::get('exito'))
        <script>
            swal.fire({
                icon: 'success',  
                message: '¡Correcto!',
                text: '{{$message}}',
            });
        </script>
    @endif 
</div>

@endsection