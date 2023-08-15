<section class="my-4 flex flex-col justify-center gap-4 w-full font-roboto ">
    <h1 class="my-2 font-bold text-xl text-center uppercase text-red-wine">Votre vin, à portée de main</h1>

    <!-- Section pour afficher le cellier de l'utilisateur boucle pour les celliers de lutilisateur many-cellars-->

    @livewire('cellars.many-cellars')

    <!-- ceci apparaitra tant que l'usager n'a qu'un cellier -->
    @if(count($cellars) < 2) <section class="my-6 mx-6">
        <p class="my-4 font-bold text-lg text-red-wine">Votre premier cellier est créé, ajoutez-y vos bouteilles et gérez-y son inventaire!</p>
        <p class="text-sm mb-4 text-gray-500">Parcourez notre catalogue contenant plus de 8000 vins différents ou ajoutez vos bouteilles personnalisées.</p>
        <p class="text-sm text-gray-500">N'hésitez pas à utiliser la barre de recherche pour trouver facilement ce que vous cherchez. Vous pouvez aussi utiliser la recherche avancée pour trier par catégorie, par pays ou par prix.</p>
</section>
@endif

<section class="flex flex-col text-sm w-full gap-2 px-6">
    <h1 class="text-left text-xl my-6 font-bold text-gray-500">Liens rapides</h1>
    <a href="{{ route('add-cellar') }}" class="text-center rounded bg-gold mt-2 px-3 py-2 text-xs font-semibold text-white shadow-sm">Ajouter un cellier</a> <!-- utilisation du lien pour la liste des bouteilles -->
    <a href="{{ route('add-bottle') }}" class="text-center rounded bg-gold mt-2 px-3 py-2 text-xs font-semibold text-white shadow-sm">Rechercher</a> <!-- utilisation du lien pour la liste des bouteilles -->
    <a href="{{ route('bottles') }}" class="text-center rounded bg-gold mt-2 px-3 py-2 text-xs font-semibold text-white shadow-sm">Catalogue</a>
</section>
</section>