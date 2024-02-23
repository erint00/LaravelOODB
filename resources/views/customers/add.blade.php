<x-app-layout>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <div class="p-2">
        <form method="POST" action="{{ route('store_customer') }}">
          @csrf
          <div>
            <x-label for="ime" value="{{ __('Ime') }}" />
            <x-input id="ime" class="block mt-1 w-full" type="text" name="ime" :value="old('ime')" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="prezime" value="{{ __('Prezime') }}" />
            <x-input id="prezime" class="block mt-1 w-full" type="text" name="prezime" :value="old('prezime')" required autofocus />
          </div>
          <div class="mt-4">
            <x-label for="korisnicko_ime" value="{{ __('Korisničko ime') }}" />
            <x-input id="korisnicko_ime" class="block mt-1 w-full" type="text" name="korisnicko_ime" :value="old('korisnicko_ime')" required autofocus />
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
