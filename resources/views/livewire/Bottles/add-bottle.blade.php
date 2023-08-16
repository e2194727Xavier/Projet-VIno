<div>
    @livewire('bottles.bottle-search')
    @if($selectedBottle)
        @livewire('bottles.single-bottle', ['bottle_id' => $selectedBottle['id'], 'quantityFromCatalogue' => '1', 'showSelect' => true, 'cellars' => $cellars,"fromCatalogue" => true], key($selectedBottle["id"]))
    @else
        @livewire('bottles.bottle-advanced-form')
    @endif
</div>