<div class="mx-6 my-4 font-roboto">
    <div class="relative flex flex-col">
        <h1 class="text-left text-xl mb-6 font-bold text-gray-500">Recherche rapide</h1>
        <p class="my-6 text-sm text-gray-500">Faites une recherche rapide parmis notre sélection de plus de 8000 bouteilles.</p>
        <input type="text" wire:model="search" wire:keydown="fetchResults" placeholder="Inscrire un mot clé..." class="border border-gray-300 rounded py-2 px-4 mb-2">
        @if(!empty($results))
        <div class="absolute top-full left-0 z-10 bg-white border border-gray-300 rounded w-full">
            <ul class="list-none p-0">
                @foreach($results as $result)
                <li wire:click="selectResult('{{ $result['id'] }}')" style="padding: 10px; border-bottom: 1px solid #ccc;">
                    {{ $result['name'] }} - {{ $result['description'] }} - {{ $result['price'] }} - {{ $result['code_saq'] }}
                </li>
                @endforeach
            </ul>
            @if(count($results) >= 10) <!-- valide si il y a plus de 10 items -->
            <button wire:click="loadMore" class="mt-2.5 px-4 py-2 text-center inline-block text-sm cursor-pointer rounded">Load more</button>
            @endif
        </div>
        @endif
    </div>
</div>