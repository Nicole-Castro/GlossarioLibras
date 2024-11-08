    <div class="max-w-sm p-6 bg-white-500 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-48 flex items-center justify-center">
        <a href="/categorias/{{$id}}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">{{ $categoria }}</h5>
        </a>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($categorias as $categoria)
                <a class="max-w-sm p-6 bg-blue-500 border border-gray-200 rounded-lg shadow h-48 flex items-center justify-center" href="/categorias/{{$categoria['id']}}">             
                    <strong class="text-white">{{$categoria['titulo']}}</strong>
                </a>
            @endforeach
        </div>
    </div>
    
