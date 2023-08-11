<section class="mx-4 my-4 flex flex-col justify-center gap-4 font-roboto ">

    <h1 class="mb-2 font-roboto font-bold text-xl">Votre vin, à portée de main.</h1>

    <!-- Section pour afficher le cellier de l'utilisateur boucle pour les celliers de lutilisateur many-cellars-->

    @livewire('cellars.many-cellars')

    <!-- ceci apparaitra tant que l'usager n'a qu'un cellier -->
    @if(count($cellars) < 1) 
    <section class="my-6 ">
        <p class="mb-2 font-roboto font-bold text-lg">Votre premier cellier est créer!</p>
        <p class="">Vous pouvez parcourir le catalogue de nos bouteilles ou utiliser l'outil de recherche </p>
        <p>Notre catalogue contient plus de 8000 sorte de vin différents.</p>
    </section>
    @endif

    <section class="flex my-6 mx-auto text-sm">
        <a href="{{ route('add-cellar') }}" class="mx-2 shrink bg-dark text-white rounded-lg px-4 py-8 text-center ">Ajouter un cellier</a> <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="{{ route('add-bottle') }}" class="mx-2 shrink bg-dark text-white rounded-lg px-4 py-8 text-center ">Rechercher une bouteille</a> <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="{{ route('bottles') }}" class="mx-2 shrink bg-dark text-white rounded-lg px-4 py-8 text-center ">Catalogue des bouteilles</a>
    </section>
</section>