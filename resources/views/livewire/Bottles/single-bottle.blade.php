    <article class="mx-6 my-2 flex border-2 border-gold rounded-lg items-center gap-2">

        <img src="{{ $bottle->image }}" alt="{{ $bottle->name }}" class="max-w-80">

        <div class="flex flex-col justify-end items-end p-4  sm:flex-row sm:justify-between sm:gap-4 grow w-full">
            <h1 class="text-right font-bold font-roboto">{{ $bottle->name }}</h1>
            <p class="text-xs mt-2 mb-2">{{ $bottle->description }}</p>
            <!-- @if(session('cellar_inf')) @endif-->

            <!-- Pour ajouter une quantité à l'ajout -->
            <div class="flex items-center gap-2 my-2">
                <button wire:click="decrement" class="text-sm w-8 h-8 px-2 py-1 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200 rounded-md">
                    -
                </button>
                @if(!$fromCatalogue)
                <!-- Montre la quantité contenue dans le cellier -->
                <input class="w-8 h-8 text-sm p-2 px-1 text-center rounded-md bg-gray-100" type='number' value="{{ $quantityInCellar }}">

                <button wire:click="increment" class="text-sm w-8 h-8 px-2 py-1 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200 rounded-md">
                    +
                </button>
                <button wire:click="addToCellar" class="rounded-md bg-red-wine px-3 py-2 text-xs font-semibold text-white shadow-sm">Enregistrer</button>
                @else
                <input class="w-8 h-8 text-sm p-2 px-1 text-center rounded-md bg-gray-100" type='number' value="{{ $quantityFromCatalogue }}">
                <button wire:click="increment" class="text-sm w-8 h-8 px-2 py-1 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200 rounded-md">
                    +
                </button>
                <button wire:click="addToCellar" class="rounded-md bg-red-wine px-3 py-2 text-xs font-semibold text-white shadow-sm">Ajouter</button>
                @endif

                @if($showSelect)
                <select wire:model="cellar_id" name="cellars" id="cellars">
                    <option value="" selected disabled>Choisir votre cellier</option>
                    @foreach($cellars as $cellar)
                    <option value="{{$cellar->id}}" @if($cellar->id == $cellar_id) selected @endif>{{$cellar->name}}</option>
                    @endforeach
                </select>
                @endif
            </div>
        </div>
    </article>