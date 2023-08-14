<div>
    @livewire('bottles.bottle-search')
    @if($selectedBottle)
        @livewire('bottles.single-bottle', ['bottle_id' => $selectedBottle['id'], 'quantityInCellar' => '1'])
    @else
        @livewire('bottles.bottle-advanced-form')
    @endif
</div>