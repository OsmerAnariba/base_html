@extends('layouts.app')

@section('contenido')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Crear persona</h1>

    <form action="{{ route('personas.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="dni" class="block text-sm font-medium text-gray-700">DNI</label>
            <input type="text" name="dni" id="dni" value="{{ old('dni') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <small class="text-gray-500">DNI de 13 dígitos sin guiones</small>
            @error('dni')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('nombre')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('fecha_nacimiento')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center space-x-4">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                Guardar
            </button>
            <a href="{{ route('personas.index') }}" class="text-gray-600 hover:underline">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection