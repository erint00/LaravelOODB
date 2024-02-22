<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kupovine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                    <div>
                        <h1>Upit 1.</h1>
                        <hr/>
                        @foreach($most_common_computers as $most_common_computer)
                        <p>{{$loop->iteration}}. {{$most_common_computer->naziv}} - {{$most_common_computer->brojac}}</p>
                        @endforeach
                    </div>
                    <div>
                        <h1>Upit 2.</h1>
                        <hr/>
                        @foreach($AMD_computer_customers as $AMD_computer_customer)
                        <p>{{$loop->iteration}}. {{$AMD_computer_customer->customer_ime}} - {{$AMD_computer_customer->customer_prezime}}</p>
                        @endforeach
                    </div>
                    <div>
                        <h1>Upit 3.</h1>
                        <hr/>
                        <p>{{$number_of_purchases}}</p>
                    </div>
                    <div>
                        <h1>Upit 4.</h1>
                        <hr/>
                        @foreach($most_ram_customers as $most_ram_customer)
                        <p>{{$loop->iteration}}. {{$most_ram_customer->customer_ime}} - {{$most_ram_customer->customer_prezime}}</p>
                        @endforeach
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
