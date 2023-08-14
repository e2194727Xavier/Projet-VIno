<section class="my-4 flex flex-col justify-center gap-4 w-full font-roboto ">
    <h1 class="mb-2 font-bold text-xl text-center">Votre vin, à portée de main.</h1>

    <!-- Section pour afficher le cellier de l'utilisateur boucle pour les celliers de lutilisateur many-cellars-->

    @livewire('cellars.many-cellars')

    <!-- ceci apparaitra tant que l'usager n'a qu'un cellier -->
    @if(count($cellars) < 2) 
    <section class="my-6 ">
        <p class="mb-2 font-roboto font-bold text-lg">Votre premier cellier est créé, ajoutez-y vos bouteilles et gérez-y son inventaire!</p>
        <p class="">Parcourez notre catalogue contenant plus de 8000 vins différents ou ajoutez vos bouteilles personnalisées.</p>
        <p>N'hésitez pas à utiliser la barre de recherche pour trouver facilement ce que vous cherchez. Vous pouvez aussi utiliser la recherche avancée pour trier par catégorie, par pays ou par prix.</p>
    </section>
    @endif

    <section class="flex text-sm w-full gap-2">
        <a href="{{ route('add-cellar') }}" class="shrink bg-dark text-white rounded-lg text-center ">Ajouter un cellier</a> <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="{{ route('bottles') }}" class="shrink bg-dark text-white rounded-lg text-center ">Rechercher une bouteille</a> <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="{{ route('bottles') }}" class="shrink bg-dark text-white rounded-lg text-center ">Catalogue des bouteilles</a>
    </section>
    </section>