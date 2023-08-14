<div>
    <div class="f">

        <div class="max-w-1200px">
            @foreach($bottles as $bottle)
            @livewire('bottles.single-bottle', ['bottle_id' => $bottle['id'], "showQuantity" => true], key($bottle['id']))
            @endforeach
            @if ($bottles instanceof \Illuminate\Pagination\LengthAwarePaginator)
            {{ $bottles->links('livewire.simple-pagination') }}
            @endif
        </div>
    </div>
</div>