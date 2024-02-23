<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-indigo-600 leading-tight">
            {{ __('Kupovine') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-blue-200 to-purple-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="grid grid-cols-4 gap-4 justify-items-center">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h1 class="text-lg font-semibold mb-2 text-indigo-600">Najčešće kupljeni računari</h1>
                        <hr class="mb-2">
                        @foreach($most_common_computers as $most_common_computer)
                            <p>{{$loop->iteration}}. {{$most_common_computer->naziv}} - {{$most_common_computer->brojac}}</p>
                        @endforeach
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h1 class="text-lg font-semibold mb-2 text-indigo-600">Kupci AMD računara</h1>
                        <hr class="mb-2">
                        @foreach($AMD_computer_customers as $AMD_computer_customer)
                            <p>{{$loop->iteration}}. {{$AMD_computer_customer->customer_ime}} - {{$AMD_computer_customer->customer_prezime}}</p>
                        @endforeach
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h1 class="text-lg font-semibold mb-2 text-indigo-600">Kupovine od 1.9.2024 do 30.9.2024</h1>
                        <hr class="mb-2">
                        <p>{{$number_of_purchases}}</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h1 class="text-lg font-semibold mb-2 text-indigo-600">Kupci računara sa preko 16GB RAM-a</h1>
                        <hr class="mb-2">
                        @foreach($most_ram_customers as $most_ram_customer)
                            <p>{{$loop->iteration}}. {{$most_ram_customer->customer_ime}} - {{$most_ram_customer->customer_prezime}}</p>
                        @endforeach
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md col-span-full">
                        <h1 class="text-lg font-semibold mb-2 text-indigo-600">Gaming računari</h1>
                        <hr class="mb-2">
                        @foreach($gaming_computers as $gaming_computer)
                            <p>{{$loop->iteration}}. {{$gaming_computer->computer_naziv}} - {{$gaming_computer->computer_procesor}} - {{$gaming_computer->computer_graficka}} - {{$gaming_computer->computer_naziv}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
