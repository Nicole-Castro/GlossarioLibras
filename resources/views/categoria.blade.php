<!-- resources/views/categoria.blade.php -->
<x-layout>
    <x-slot name="heading">
        {{$categoria->titulo}}
    </x-slot>
    <div class="grid grid-cols-4 gap-4" >
        @foreach ($categoria->palavras as $palavra)
            <a class="max-w-sm p-6 bg-blue-500 border border-gray-200 rounded-lg shadow h-60 grid items-center justify-center" href="{{ url('/palavras/'.$palavra->id) }}">
                <div>
                    <strong class="text-white text-xl ">{{ $palavra->palavra }}</strong>
                </div>
                <img src="{{$palavra->url}}" alt="" class="h-28">
            </a>
        @endforeach
    </div>
</x-layout>
