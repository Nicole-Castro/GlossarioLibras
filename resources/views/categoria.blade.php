<x-layout>
    <x-slot name="heading">
        {{$categoria->titulo}}
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-3">
        @foreach ($categoria->palavras as $palavra)
        <a class="max-w-sm p-6 bg-blue-500 border border-gray-200 rounded-lg shadow grid grid-rows-[auto,1fr] items-center justify-items-center" href="{{ url('/palavras/'.$palavra->id) }}">
            <div class="mb-4">
                <strong class="text-white text-xl text-center">{{ $palavra->palavra }}</strong>
            </div>
            <img src="{{ $palavra->url }}" alt="" class="h-54 rounded-md">
        </a>
        @endforeach
    </div>
</x-layout>
