<!-- <div class=""> -->
<!-- <div class="flex items-center justify-between">
    @if ($editing)
        <input wire:model="title" type="text" placeholder="{{ $cellar->name }}" />
        <button class="text-right" wire:click="toggleEditingClose">✕</button>
        <button class="text-right" wire:click="save">✔</button>
    @else
        <h1 class="text-3xl font-bold mb-4">{{ $cellar->name }}</h1>
        <button class="text-right" wire:click="toggleEditing">Modifier</button>
    @endif
</div> -->
<div>
    <div x-data="{ editing: false, newName: '{{ $cellar->name }}' }">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold mb-4" x-show="!editing">{{ $cellar->name }}</h1>
            <input x-show="editing" x-model="newName" type="text" class="text-3xl font-bold mb-4 w-20 mr-2" />
            <button class="ml-2" @click="editing = true" x-show="!editing">Modifier</button>
        </div>

        <div x-show="editing">
            <div class="flex justify-end space-x-0 mt-2 ">
                <button class="mr-2" x-on:click="editing = false; Livewire.emit('updateCellarName', newName)">✔</button>
                <button x-on:click="editing = false">✕</button>
            </div>
        </div>
    </div>

    @foreach($cellar->bottles as $bottle)
    @livewire('bottles.single-bottle', ['bottle_id' => $bottle->id])
    <!-- Quantité: {{ $bottle->pivot->quantity }} -->
    @endforeach
</div>