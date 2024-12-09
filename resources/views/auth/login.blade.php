@extends('layouts.app')

@section('titulo')
Login en Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center gap-12">
  <div class="md:w-4/12">
    <img src="{{ asset('img/login.jpg') }}" alt="Imagen registro de usuarios" class="w-50 h-50">
  </div>
  <div class="md:w-4/12">
    <form class="bg-white p-5" method="POST" action="{{ route('login') }}" novalidate>
      @csrf
      @if(session('mensaje'))
        <p class="bg-red-500 font-bold text-gray-100 p-1">{{ session('mensaje')}}</p>
      @endif
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
          class="p-3 border w-full rounded-lg my-3 @error('password')
            border-red-500
          @enderror" />
          @error('password')
            <p class="bg-red-500 font-bold text-gray-100 p-1">{{ $message }}</p>
          @enderror
      </div>
      <div class="p-3">
      <input
      type="checkbox"
      name="remember"
      /> Mantener mi sesión abierta
      </div>
      <input
        type="submit"
        value="Login"
        class="bg-emerald-950 text-white p-3 rounded-lg w-full font-bold cursor-pointer hover:bg-emerald-900 mt-3" />
    </form>
  </div>
</div>
@endsection
