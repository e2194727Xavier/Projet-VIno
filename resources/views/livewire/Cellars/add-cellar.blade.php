<div class="flex flex-col justify-center items-center my-8">
    <h1 class="font-bold">Ajouter un nouveau cellier</h1>
    <div class="w-full max-w-sm p-4 bg-white rounded-lg flex flex-col items-center ">
        @if (session()->has('message'))
            <div class="mb-4 text-green-500">{{ session('message') }}</div>
        @endif
        <form wire:submit.prevent="store" class="flex flex-col items-center">
            @csrf

            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-700" ></label>
                <input type="text" wire:model="nom" id="nom" aria-placeholder="Nom du cellier" placeholder="Nom du cellier" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500">
                @error('nom') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

        @livewire('layouts.button', ['label' => 'Ajouter', 'class' => 'bg-gold rounded-lg items-center px-4 py-2 my-4'])
        </form>
        <a href="{{ route('cellars') }}" class="text-sm mt-6 underline">Voir mes celliers</a>
        <a href="{{ route('add-bottle') }}" class="text-sm mt-6 underline">Ajouter une bouteille</a>
    </div>
</div>




