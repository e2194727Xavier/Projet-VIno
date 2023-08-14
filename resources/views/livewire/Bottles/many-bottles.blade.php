    <div >
        <h1 class="text-2xl text-center font-roboto my-4">Catalogue des bouteilles</h1>
        <div class="max-w-1200px">
            @foreach($bottles as $bottle)
            @livewire('bottles.single-bottle', ['bottle_id' => $bottle['id'], "showQuantity" => true], key($bottle['id']))
            @endforeach
            @if ($bottles instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div>{{ $bottles->links('livewire.simple-pagination') }}</div>
            @endif
        </div>
    </div>