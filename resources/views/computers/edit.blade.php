<x-app-layout>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <div class="p-2">
        @foreach($computers as $computer)
        <form method="POST" action="{{ route('update_computer') }}">
          @csrf
          <input type="hidden" name="id" value="{{$computer->id}}"/>
          <div>
            <x-label for="naziv" value="{{ __('Naziv') }}" />
            <x-input id="naziv" class="block mt-1 w-full" type="text" name="naziv" value="{{$computer->naziv}}" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="procesor" value="{{ __('Procesor') }}" />
            <x-input id="procesor" class="block mt-1 w-full" type="text" name="procesor" value="{{$computer->procesor}}" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="graficka" value="{{ __('Grafička') }}" />
            <x-input id="graficka" class="block mt-1 w-full" type="text" name="graficka" value="{{$computer->graficka}}" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="kuciste" value="{{ __('Kućište') }}" />
            <x-input id="kuciste" class="block mt-1 w-full" type="text" name="kuciste" value="{{$computer->kuciste}}" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="ram" value="{{ __('Ram') }}" />
            <x-input id="ram" class="block mt-1 w-full" type="text" name="ram" value="{{$computer->ram}}" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="napojna" value="{{ __('Napojna') }}" />
            <x-input id="napojna" class="block mt-1 w-full" type="text" name="napojna" value="{{$computer->napojna}}" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="brand" value="{{ __('Brend') }}" />
            <select id="brand" name="brand" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
              <option>Odaberi</option>
              @foreach ($brands as $brand)
              <option value="{{$brand->id}}"
              @if($computer->brand == $brand->id) selected
              @endif>{{$brand->naziv}}</option>
              @endforeach
            </select>
          </div>
          <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
              {{ __('Spremi') }}
            </x-button>
          </div>
        </form>
        @endforeach
      </div>
    </div>
  </div>
</div>
</x-app-layout>
