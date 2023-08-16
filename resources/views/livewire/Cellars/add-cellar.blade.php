<div class="flex flex-col justify-center items-center my-8 ">
           
    <div class="w-full p-4 bg-white flex flex-col h-screen">
    <h1 class="text-left text-xl m-6 mb-6 font-bold text-gray-500">Ajouter un nouveau cellier</h1>
         @if (session()->has('message'))
        <div class="text-green-500 w-full">{{ session('message') }}</div>
        @endif 
        @error('nom')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
        <form wire:submit.prevent="store" class="flex flex-col w-full ">
            @csrf

            <div class="mb-4 flex flex-col gap-4">
                <div class="my-2 flex rounded items-center gap-2 shadow shadow-gray-400">
                    <div class="mb-4 text-center border-10 rounded">

                        <label for="nom" class="block text-sm font-medium text-gray-700"></label>
                        <input type="text" wire:model="nom" id="nom" aria-placeholder="Nom du cellier" placeholder="Nom du cellier" class="w-full px-3 py-2 mt-1 border focus:outline-none focus:ring focus:ring-blue-500 border-none">
                        <!-- @error('nom') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror -->
                    </div>
                </div>

                @livewire('layouts.button', ['label' => 'Ajouter', 'class' => 'text-center rounded bg-red-wine p-3 text-s font-semibold text-white shadow-sm'])
            </div>
        </form>

        <div class="flex flex-col gap-4 w-full mt-12">
            <a href="{{ route('index') }}" class="text-center rounded bg-gold p-3 text-s font-semibold text-white shadow-sm">Voir mes celliers</a>
            <a href="{{ route('add-bottle') }}" class="text-center rounded bg-gold p-3 text-s font-semibold text-white shadow-sm">Ajouter une bouteille</a>
        </div>

    </div>