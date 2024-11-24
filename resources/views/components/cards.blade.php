<div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="/categorias/{{$id}}" class="block text-center mb-6">
        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $categoria }}
        </h5>
    </a>

    <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($categorias as $categoria)
            <a
                class="p-4 bg-blue-500 border border-gray-200 rounded-lg shadow flex items-center justify-center text-center h-32"
                href="/categorias/{{$categoria['id']}}">
                <strong class="text-white">
                    {{$categoria['titulo']}}
                </strong>
            </a>
        @endforeach
    </div>
</div>
