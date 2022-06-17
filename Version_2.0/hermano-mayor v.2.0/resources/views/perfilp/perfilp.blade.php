@extends('dashboard')
@section('menor')
<div class="container mx-auto lg:mt-5 sm:mt-8">
    @if(count($ver)>0)
        <div class="w-11/12 mx-auto flex flex-wrap h-full lg:space-x-2 md:space-x-2 lg:space-y-0 md:space-y-0 sm:space-y-2">
            <div class="lg:basis-3/12 md:basis-5/12 sm:basis-full h-96 -ml-4 bg-white rounded-xl pt-4">
                <h1 class="text-gray-900 text-center text-lg font-bold">Imagen de perfil</h1>
                <p class="text-gray-900 text-center text-base font-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic aut ratione itaque at consectetur, nemo praesentium necessitatibus fuga vero! Atque blanditiis esse voluptas iure veritatis quia earum odit ex facilis!</p>
            </div>
            <div class="lg:basis-8/12 md:basis-7/12 py-4 sm:basis-full -ml-4 bg-white rounded-xl">
                @foreach ($ver as $object)
                <h1 class="text-gray-900 text-center text-2xl font-bold">Datos de usuario</h1>
                <p class="text-gray-900 text-justify px-8 pt-8 font-bold">Nombre: </p>
                <p class="text-gray-900 text-justify px-8 pt-1 font-bold">{{$object->name}}</p>
                <p class="text-gray-900 text-justify px-8 pt-4 font-bold">Edad: </p>
                <p class="text-gray-900 text-justify px-8 pt-1 font-bold">{{$object->edad}}</p>
                <p class="text-gray-900 text-justify px-8 pt-4 font-bold">Carrera esperada a estudiar: </p>
                <p class="text-gray-900 text-justify px-8 pt-1 font-bold">{{$object->carrera}}</p>
                <p class="text-gray-900 text-justify px-8 pt-4 font-bold">Motivo y descripción de tu perfil: </p>
                <p class="text-gray-900 text-justify px-8 pt-1 font-bold">{{$object->interes}}</p>
                @endforeach
            </div>
        </div>
        @livewire('ver-perfil')  
    @else
        <div class="w-10/12 mx-auto flex flex-wrap h-full  lg:space-x-2 md:space-x-2 lg:space-y-0 md:space-y-0 sm:space-y-2">
            <div class="px-4 basis-full h-64 bg-white   lg:-mt-0 md:-mt-0 lg:-ml-4 md:-ml-4 sm:-mt-4 rounded-xl">
                <h1 class="lg:text-center md:text-justify pt-6 font-extrabold text-indigo-800 lg:text-5xl md:text-4xl sm:text-3xl">Regresa al menu de inicio y completa tu perfil >:(</h1>
            </div>
        </div>
    @endif
</div>
@endsection