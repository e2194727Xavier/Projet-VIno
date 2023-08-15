    <div class="my-6">
        <h1 class="text-left text-xl ml-6 mb-6 font-bold text-gray-500">Catalogue</h1>
        <div class="max-w-1200px">
            @if(empty($cellars))
            <p class="my-12 w-full">
            Aucun cellier trouvé.
            </p>
            @endif
            @foreach($bottles as $bottle)
                @livewire('bottles.single-bottle', ['bottle_id' => $bottle['id'], "quantityFromCatalogue" => 1, "fromCatalogue" => true, 'cellars' => $cellars], key($bottle['id']))
            @endforeach

            @if ($bottles instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="my-4">{{ $bottles->links('livewire.simple-pagination') }}</div>
            @endif
        </div>
    </div>