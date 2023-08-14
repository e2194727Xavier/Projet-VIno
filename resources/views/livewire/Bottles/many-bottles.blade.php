    <div class="my-4">
        <h1 class="text-2xl text-left font-roboto my-6 ml-6">Catalogue des bouteilles</h1>
        <div class="max-w-1200px">
            @foreach($bottles as $bottle)
                @livewire('bottles.single-bottle', ['bottle_id' => $bottle['id'], "quantityInCellar" => 1], key($bottle['id']))
            @endforeach

            @if ($bottles instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="my-4">{{ $bottles->links('livewire.simple-pagination') }}</div>
            @endif
        </div>
    </div>