@extends('plantillas.principal')
@section('titulo')
    nueva categoria
@endsection
@section('cabecera')
    Crear Categoria
@endsection
@section('contenido')
    <div class="p-4 rounded-xl w-1/2 mx-auto shadow-xl bg-gray-300">
        <form action="{{ route('categories.store') }}" method='POST'>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                    NOMBRE
                </label>
                <input id="nombre" type="text" placeholder="Nombre categoría..." name="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('nombre')
                    <x-error>{{ $message }}</x-error>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                    DESCRIPCIÓN
                </label>
                <textarea id="descripcion" placeholder="Descripción categoría..." name="descripcion"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                @error('descripcion')
                    <x-error>{{ $message }}</x-error>
                @enderror
            </div>
            <div class="flex flex-row-reverse">
                <button type="submit" name="btn"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fas fa-save mr-2"></i>GUARDAR
                </button>
                <button type="reset"
                    class="mr-2 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-blue-800">
                    <i class="fas fa-paintbrush mr-2"></i>LIMPIAR
                </button>
                <a href="{{ route('categories.index') }}"
                    class="mr-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">
                    <i class="fas fa-backward mr-2"></i>VOLVER
                </a>
            </div>
        </form>
    </div>
@endsection
