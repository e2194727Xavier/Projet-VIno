<div class="flex flex-col justify-center w-full max-h-85 ">
<p class="my-4 ml-6">Ou utiliser ce formulaire pour raffiner votre recherche</p>
    
<div class="p-6 px-4 w-full">
        <form wire:submit.prevent="handleSearch" class="w-full ">
            <h1 class="text-2xl font-bold mb-6 text-center">Recherche avancée</h1>
            @if ($errorMessage)
            <div class="text-red-600 my-6">{{ $errorMessage }}</div>
            @endif
            <label for="name">
                <input class="border border-gray-300 rounded px-3 py-2 my-2 w-full text-xs" wire:model="search" type="text" placeholder="Nom...">
            </label>
            <label for="description">
                <input class="border border-gray-300 rounded px-3 py-2 my-2 w-full text-xs" wire:model="description" id="description" type="text" placeholder="Pays...">
            </label>
            <label for="priceMin">
                <input class="border border-gray-300 rounded px-3 py-2 my-2 w-full text-xs" wire:model="priceMin" type="number" placeholder="Prix minimum...">
            </label>
            <label for="priceMax">
                <input class="border border-gray-300 rounded px-3 py-2 my-2 w-full text-xs" wire:model="priceMax" type="number" placeholder="Prix maximal...">
            </label>
            <button class="mt-2 bg-red-wine text-white px-4 py-2 rounded" wire:click="handleSearch">Recherche</button>
        </form>
    </div>
</div>
