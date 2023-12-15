@extends('plantillas.principal')
@section('titulo')
    categorias
@endsection
@section('cabecera')
    Mis Categorias
@endsection
@section('contenido')
    <div class="relative overflow-x-auto">
        <div class="my-2 flex flex-row-reverse">
            <a href="{{ route('categories.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                    class="fas fa-add  text-lg mr-2"></i>NUEVO</a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Código
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NOMBRE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DESCRIPCIÓN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACCIONES
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->descripcion }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form method="POST" action="{{route('categories.destroy', $item)}}">
                                @csrf
                                @method('delete')
                                <a href="{{route('categories.edit', $item)}}"><i class="fas fa-edit text-xl mr-2"></i></a>
                                <button type="submit"><i class="fas fa-trash text-xl text-red-600"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-2">
            {{ $categorias->links() }}
        </div>
    </div>
    @if(session('info'))
    <script>
        Swal.fire({
            icon: "success",
            title: "{{session('info')}}",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif
@endsection
