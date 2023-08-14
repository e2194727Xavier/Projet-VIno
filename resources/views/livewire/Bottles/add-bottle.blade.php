<div class="bg-gray-100 h-screen">
    @livewire('bottles.bottle-search')
    @if($selectedBottle)
        @livewire('bottles.single-bottle', ['bottle_id' => $selectedBottle['id']])
    @else
        @livewire('bottles.bottle-advanced-form')
    @endif
</div>