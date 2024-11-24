<x-layout>
    <x-slot name="heading">
        Categorias
    </x-slot>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-3">
    @foreach ($categorias as $categoria)
        <a class="p-6 bg-blue-500 border border-gray-200 rounded-lg shadow h-48 flex items-center justify-center text-center"
           href="{{ url('/categorias/'.$categoria->id) }}">
            <strong class="text-white">{{ $categoria['titulo'] }}</strong>
        </a>
    @endforeach
</div>
</x-layout>

