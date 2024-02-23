<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-600 leading-tight">
            {{ __('Početna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-blue-200 to-purple-200 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
