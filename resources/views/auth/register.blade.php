@extends('layouts.app')

@section('titulo')
Registrate en Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center gap-12">
  <div class="md:w-4/12">
    <img src="{{ asset('img/login.jpg') }}" alt="Imagen registro de usuarios" class="w-50 h-50">
  </div>
  <div class="md:w-4/12">
    <form class="bg-white p-5" method="POST" action="{{ route('register') }}" novalidate>
      @csrf
      <div class="p-3">
        <label class="text-md font-bold" for="nombre">Nombre:</label>
        <input
          id="name"
          name="name"
          type="text"
          placeholder="Tu nombre"
          value="{{ old('name') }}"
          class="p-3 border w-full rounded-lg my-3  @error('name') border-red-500
          @enderror" />
          @error('name')
          <p class="bg-red-500 font-bold text-gray-100 p-1">{{ $message }}</p>
          @enderror
      </div>
      <div class="p-3">
        <label class="text-md font-bold" for="username">Username:</label>
        <input
          id="username"
          name="username"
          type="text"
          placeholder="Tu username"
          value="{{ old('username') }}"
          class="p-3 border w-full rounded-lg my-3 @error('username') border-red-500
          @enderror" />
          @error('username')
          <p class="bg-red-500 font-bold text-gray-100 p-1">{{ $message }}</p>
          @enderror
      </div>
      <div class="p-3">
        <label class="text-md font-bold" for="email">Email:</label>
        <input
          id="email"
          name="email"
          type="email"
          placeholder="Tu email"
          value="{{ old('email') }}"
          class="p-3 border w-full rounded-lg my-3 @error('email') border-red-500
          @enderror" />
          @error('email')
          <p class="bg-red-500 font-bold text-gray-100 p-1">{{ $message }}</p>
          @enderror
      </div>
      <div class="p-3">
        <label class="text-md font-bold" for="password">Password:</label>
        <input
          id="password"
          name="password"
          type="password"
          placeholder="Password de registro"
          class="p-3 border w-full rounded-lg my-3" />
      </div>
      <div class="p-3">
        <label class="text-md font-bold" for="password_confirmation">Repetir Password:</label>
        <input
          id="password_confirmation"
          name="password_confirmation"
          type="password"
          placeholder="Repite tu password"
          class="p-3 border w-full rounded-lg my-3  @error('password') border-red-500
          @enderror" />
          @error('password')
          <p class="bg-red-500 font-bold text-gray-100 p-1">{{ $message }}</p>
          @enderror
      </div>
      <input
        type="submit"
        value="Crear cuenta"
        class="bg-emerald-950 text-white p-3 rounded-lg w-full font-bold cursor-pointer hover:bg-emerald-900 mt-3" />
    </form>
  </div>
</div>
@endsection
