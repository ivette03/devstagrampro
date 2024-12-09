@extends('layouts.app');
@section('titulo')
Perfil: {{ $user->username }}
@endsection
@section('contenido')
<div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row" >
        <div class="md:w-8/12 lg:w-6/12 px-5 ">
            <img src="{{ asset('img/usuario.png') }}" alt="imagen de usuario" width="200px">
        </div>
        <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center py-10">
            <p class="text-2xl font-bold text-gray-700 mb-3">{{ $user->username }}</p>
            <p class="text-sm text-gray-700 font-bold mb-3">0 Seguidores</p>
            <p class="text-sm text-gray-700 font-bold mb-3">0 Siguiendo</p>
            <p class="text-sm text-gray-700 font-bold mb-3">0 Posts</p>
        </div>

    </div>

</div>
@endsection