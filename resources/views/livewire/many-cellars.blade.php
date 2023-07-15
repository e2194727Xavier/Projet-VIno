<div style="margin-top: 2rem;">
    <div class="grid grid-cols-3 gap-4 max-w-3xl mx-auto">
        @foreach ($cellars as $cellar)
        <a href="{{ route('singleCellar', ['cellar_id' => $cellar->id]) }}" class="col">
                <div class="card-body mb-4 text-center border-10 border-gray-300 rounded-lg" style="margin-right: 1rem;">
                    <p class="card-title text-xl font-bold mb-2">ID: {{ $cellar->id }}</p>
                    <p class="mb-4">Nom: {{ $cellar->name }}</p>
                    <p class="mb-4">Créé le: {{ $cellar->created_at }}</p>
                    <p class="mb-4">Mis à jour le: {{ $cellar->updated_at }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
