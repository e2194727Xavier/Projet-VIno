<!-- copie originale, search ne fonctionne pas ici  -->

<div class="mt-6">
    @error('cellars')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <div class="flex justify-center mb-6">
        <livewire:cellar-search wire:loading.attr="disabled" />
    </div>

    <div class="mt-4 font-roboto">
    <h1 class="text-center text-xl mb-6">Liste de vos celliers</h1>
    <div class="flex flex-col gap-2 bg-pink ">
        @foreach ($cellars as $cellar)
        <article class="bg-gold mx-6 my-2 flex border-2 border-gold rounded-lg items-center gap-2 justify-center">
            <a href="{{ route('singleCellar', ['cellar_id' => $cellar->id]) }}" class="">
                    <div class="mb-4 text-center border-10 rounded-lg">
                        <p class="hidden">ID: {{ $cellar->id }}</p>
                        <p class="text-xl mt-4 text-white uppercase font-montserrat">{{ $cellar->name }}</p>
                    </div>
                </a>
        </article>
        @endforeach
    </div>
</div>
        @if ($cellars->isEmpty() && !empty($search))
            <p class="text-center">Aucune cellier trouvée pour le terme de recherche "{{ $search }}".</p>
        @endif
    </div>
</div>
