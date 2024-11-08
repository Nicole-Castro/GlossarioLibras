<x-layout>
    <x-slot name="heading">
        {{ $palavra->titulo }}
    </x-slot>
    <div class=" flex items-center justify-center">

    <div class="max-w-lg p-6 bg-blue-500 border border-gray-200 rounded-lg shadow  items-center justify-center grid">
        <p>{{ $palavra->palavra }}</p>
        <img src="{{$palavra->url}}" alt="">
    </div>
    </div>
</x-layout>
