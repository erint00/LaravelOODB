<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brendovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-x1">Ovdje će biti izlistani brendovi</h1>
                    @foreach ($brands as $brands)
                    <p class="p-2"> {{$brands->naziv}} - {{$brands->drzava}}</p>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
