<x-layout>
    <x-slot name="heading">
        {{ $palavra->titulo }}
    </x-slot>
    <div class=" flex items-center justify-center">

    <div class="max-w-sm p-6 bg-blue-500 border border-gray-200 rounded-lg shadow grid grid-rows-[auto,1fr] items-center justify-items-center">
        <div class="mb-3">
            <p class="text-xl text-white">{{ $palavra->palavra }}</p>
        </div>
        <img src="{{$palavra->url}}" class="h-54" alt="">
    </div>
    </div>
</x-layout>
