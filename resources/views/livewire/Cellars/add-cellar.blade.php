<div class="flex flex-col justify-center items-center my-8 ">
    <div class="w-full max-w-sm p-4 bg-white flex flex-col items-center h-screen">
    <h1 class="text-left text-xl ml-6 mb-6 font-bold text-gray-500">Ajouter un nouveau cellier</h1>
        @if (session()->has('message'))
        <div class="mb-4 text-green-500">{{ session('message') }}</div>
        @endif
        <form wire:submit.prevent="store" class="flex flex-col items-center ">
            @csrf

            <div class="mb-4 flex flex-col gap-4">
                <div class="mx-6 my-2 flex rounded items-center gap-2 justify-center shadow shadow-gray-400">
                    <div class="mb-4 text-center border-10 rounded">

                        <label for="nom" class="block text-sm font-medium text-gray-700"></label>
                        <input type="text" wire:model="nom" id="nom" aria-placeholder="Nom du cellier" placeholder="Nom du cellier" class="w-full px-3 py-2 mt-1 border focus:outline-none focus:ring focus:ring-blue-500 border-none">
                        @error('nom') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                @error('nom')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                @livewire('layouts.button', ['label' => 'Ajouter', 'class' => 'rounded-md bg-red-wine px-3 py-2 text-xs font-semibold text-white shadow-sm'])
            </div>
        </form>

        <div class="flex flex-col gap-4 w-full mt-12">
            <a href="{{ route('index') }}" class="text-center rounded bg-gold mt-2 px-3 py-2 text-xs font-semibold text-white shadow-sm">Voir mes celliers</a>
            <a href="{{ route('add-bottle') }}" class="text-center rounded bg-gold mt-2 px-3 py-2 text-xs font-semibold text-white shadow-sm">Ajouter une bouteille</a>
        </div>

    </div>