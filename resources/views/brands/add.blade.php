<x-app-layout>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <div class="p-2">
        <form method="POST" action="{{ route('store_brand') }}">
          @csrf
          <div>
            <x-label for="naziv" value="{{ __('Naziv') }}" />
            <x-input id="naziv" class="block mt-1 w-full" type="text" name="naziv" :value="old('naziv')" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="drzava" value="{{ __('Drzava') }}" />
            <x-input id="drzava" class="block mt-1 w-full" type="text" name="drzava" :value="old('drzava')" required autofocus />
          </div>

          <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
              {{ __('Spremi') }}
            </x-button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</x-app-layout>
