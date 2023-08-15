<div>
    <h1>results advanced search</h1>
    @foreach($bottles as $bottle)

    <div>
        <h5>{{ $bottle->name }}</h5>
        <p>{{ $bottle->description }}</p>
        <p>{{ $bottle->price }}</p>
        <p>SAQ code: {{ $bottle->code_saq }}</p>
    </div>
    @endforeach
    @if ($bottles instanceof \Illuminate\Pagination\LengthAwarePaginator)
    <div class="my-4">{{ $bottles->links('livewire.simple-pagination') }}</div>
    @endif
</div>