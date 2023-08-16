<div class="">
    <div x-data="{ editing: false, newName: '{{ $cellar->name }}' }" class="text-gray-500">
        <div class="flex items-center justify-between">
            <h1 class="p-6 text-2xl font-bold mb-4" x-show="!editing">{{ $cellar->name }}</h1>
            <input x-show="editing" x-model="newName" type="text" class="text-3xl font-bold mb-4 mr-2" />
            <button class="ml-2 p-6" @click="editing = true" x-show="!editing">Modifier</button>
        </div>

        <div x-show="editing">
            <div class="flex justify-end mt-2 ">
                <button class="mr-2" x-on:click="editing = false; Livewire.emit('updateCellarName', newName)">✔</button>
                <button class="mr-2" x-on:click="editing = false">✕</button>
            </div>
        </div>
    </div>

    @foreach($cellar->bottles as $bottle)
        @livewire('bottles.single-bottle', ['bottle_id' => $bottle->id, 'quantityInCellar' => $bottle->pivot->quantity, 'showSelect' => false, 'myCellarId'=>$cellar->id])
    @endforeach
</div>