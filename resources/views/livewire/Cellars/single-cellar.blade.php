<div class="p-6 h-screen">
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
<div  x-data="{ editing: false, newName: '{{ $cellar->name }}' }">
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






    <h2 class="text-xl font-semibold mb-2">Bouteilles:</h2>
    <ul class="grid grid-cols-1 gap-4">
      
        @foreach($cellar->bottles as $bottle)
            <li class="bg-white p-4 shadow-md rounded-md flex justify-around	 items-center">
                <div>
                    @livewire('bottles.single-bottle', ['bottle_id' => $bottle->id])
                </div>
                <div class="flex flex-col p-3 space-y-2.5 items-center ">
                    <p class="text-sm text-gray-500 mb-4">Quantité: {{ $bottle->pivot->quantity }}</p>
                    <div class="flex items-center space-x-2 mb-4">
                        <button wire:click="increment({{ $bottle->id }})" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <button  wire:click="decrement({{$bottle->id}})" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                            </svg>
                        </button>
                        

                    </div>
                    
                    <a href="{{ route('update_bottle', ['cellar_id' => $cellar->id,'bottle_id' => $bottle->id]) }}"  class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                         @livewire('layouts.button', ['label' => 'modifier cellier'])
                    </a>

                    <div class="py-2">
                  
                      @livewire('bottles.delete-bottle', ['bottleId' =>$bottle->id, 'cellarId' => $cellar->id])

                    </div>
                </div>
             
            </li>
        @endforeach
    </ul>
</div>

</div>




