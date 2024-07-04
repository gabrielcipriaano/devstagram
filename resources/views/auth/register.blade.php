@extends('layouts.app')

@section('title')
    Regístrate En DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-5 md:h-full">
        <div class="md:w-6/12">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen Registro de Usuarios" class="md:h-full object-cover">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" placeholder="Tu nombre" id="name" name="name"
                        class="border p-3 rounded-lg w-full @error('name')
                            border-red-500
                        @enderror"
                        value="{{ old('name') }}">

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" placeholder="Tu nombre de usuario" id="username" name="username"
                        class="border p-3 rounded-lg w-full @error('username')
                            border-red-500
                        @enderror"
                        value="{{ old('username') }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" placeholder="Tu email" id="email" name="email"
                        class="border p-3 rounded-lg w-full @error('email')
                            border-red-500
                        @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" placeholder="Ingresa tu contraseña" id="password" name="password"
                        class="border p-3 rounded-lg w-full @error('password')
                            border-red-500
                        @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Confirmar
                        contraseña</label>
                    <input type="password" placeholder="Repite tu contraseña" id="password_confirmation"
                        name="password_confirmation"
                        class="border p-3 rounded-lg w-full @error('password_confirmation')
                        border-red-500
                    @enderror">
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-900 cursor-pointer uppercase font-bold transition-colors w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection