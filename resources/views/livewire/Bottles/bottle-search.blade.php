<div style="margin-left: 40px; margin-bottom:30px; margin-top:20px;">
    <div style="position: relative;">
        <input type="text" wire:model="search" wire:keydown="fetchResults" placeholder="Inscrire un mot clé..." class="border border-gray-300 rounded py-2 px-4 mb-2">
        <button class="bg-dark text-white hover:bg-dark-red text-white font-bold py-2 px-4 border border-dark-red rounded" wire:click="handleSearch">Rechercher</button>
        <a href="{{ route('bottle-advanced-form') }}">Recherche avancée</a>
        @if(!empty($results))
            <div style="position: absolute; top: 100%; left: 0; z-index: 10; background-color: white; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                <ul style="list-style: none; padding: 0;">
                    @foreach($results as $result)
                        <li wire:click="selectResult('{{ $result['id'] }}')" style="padding: 10px; border-bottom: 1px solid #ccc;">
                            {{ $result['name'] }} - {{ $result['description'] }} - {{ $result['price'] }} - {{ $result['code_saq'] }}
                        </li>
                    @endforeach
                </ul>
                @if(count($results) >= 10) <!-- This checks if there are more than 10 items. Adjust the number as needed. -->
                    <button wire:click="loadMore" style="margin-top: 10px; background-color: #9B0738; color: white; border: none; padding: 8px 16px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; cursor: pointer; border-radius: 4px;">Plus</button>
                @endif
            </div>
        @endif
    </div>
</div>

