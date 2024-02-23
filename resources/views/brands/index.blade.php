<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-indigo-600 leading-tight">
            {{ __('Brendovi') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-blue-200 to-purple-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-end">
            <a href="\add_brand" class="m-2 p-2 text-sm bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">Dodaj brand</a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="p-2">
                    <h1 class="font-x1 text-indigo-600">Lista brendova</h1>
                    <hr/>
                    @foreach ($brands as $brand)
                    <div class="flex space-x-4">
                        <div class="flex-1"><p class="p-2">{{$brand->naziv}} - {{$brand->drzava}}</div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('delete_brand') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$brand->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{__('Obriši') }}
                                </button>
                            </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_brand') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$brand->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-green-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Uredi') }}
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
