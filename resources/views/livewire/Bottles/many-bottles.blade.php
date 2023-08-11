<div>
    <div class="f">

        <div class="max-w-1200px">
            @foreach($bottles as $bottle)
                @livewire('bottles.single-bottle', ['bottle_id' => $bottle['id']])
            @endforeach
            @if ($bottles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="col-span-2">{{ $bottles->links() }}</div>
            @endif
        </div>
    </div>
</div>