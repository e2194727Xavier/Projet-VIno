    <article class="mx-6 my-2 flex rounded-lg items-center gap-2 shadow shadow-gray-400">

        <img src="{{ $bottle->image }}" alt="{{ $bottle->name }}" class="max-w-80">

        <div class="flex flex-col justify-end items-end p-4 sm:flex-row sm:justify-between sm:gap-4 grow w-full">
            <div class="flex justify-between gap-2">
                @if (session()->has('message'))
                <div class="text-sm font-light text-green-500">{{ session('message') }}</div>
                @endif
                <h1 class="text-right font-bold font-roboto">
                    {{ $bottle->name }}
                </h1>
            </div>

            <p class="text-right text-xs my-2">{{ $bottle->description }}</p>
            <p class="text-right text-xs">prix SAQ {{ $bottle->price }}$</p>
            
            <!-- @if(session('cellar_inf')) @endif-->

            <!-- Pour ajouter une quantité à l'ajout -->
            <div class="my-2 flex flex-col">
                <div class="flex justify-between items-center">
                    <button wire:click="decrement" class="text-xs w-6 h-6 px-2 py-1 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200 rounded-full">
                        -
                    </button>
                    @if(!$fromCatalogue)
                    <!-- Montre la quantité contenue dans le cellier -->
                    <input class="w-8 h-8 text-sm p-2 px-1 text-center rounded-md bg-gray-100 border-none" type='number' value="{{ $quantityInCellar }}">
                    <button wire:click="increment" class="text-xs w-6 h-6 px-2 py-1 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200 rounded-full">
                        +
                    </button>
                    <button wire:click="addToCellar" class="rounded-lg bg-red-wine px-3 py-2 text-xs font-semibold text-white shadow-sm">Enregistrer</button>
                    @else
                    <input class="w-8 h-8 text-sm p-2 px-1 text-center rounded-md bg-gray-100 border-none" type='number' value="{{ $quantityFromCatalogue }}">
                    <button wire:click="increment" class="text-xs w-6 h-6 px-2 py-1 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200 rounded-full">
                        +
                    </button>
                    <button wire:click="addToCellar" class="rounded-md bg-red-wine px-3 py-2 text-xs font-semibold text-white shadow-sm">Ajouter</button>
                    @endif
                </div>
                @if($showSelect)
                <select wire:model="cellar_id" name="cellars" id="cellars" class="rounded mt-2 text-xs">
                    <option value="" disabled>Choisir votre cellier</option>
                    @foreach($cellars as $cellar)
                    <option value="{{$cellar->id}}" @if($cellar->id == $cellar_id) selected @endif>{{$cellar->name}}</option>
                    @endforeach
                </select>
                @endif
            </div>
        </div>
    </article>