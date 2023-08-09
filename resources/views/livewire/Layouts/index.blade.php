<section class="mx-4 my-4 flex flex-col justify-center gap-4 font-roboto ">


    <!-- Section pour afficher le cellier de l'utilisateur boucle pour les celliers de lutilisateur many-cellars-->

    <h2 class="my-4 font-bold text-lg">Mes Celliers</h2>
    <div class="border-2 border-gold rounded-lg items-center p-2 flex justify-between">
        <p>{{ $cellar['name'] ?? '' }}</p>
        @livewire('layouts.button', ['label' => 'Renommer', 'class' => 'font-semibold text-sm bg-gold rounded-lg p-2'])
    </div>

    <!-- section a ajouter tant et aussi longtemps que le premier cellier naura pas été renommé ? 
     si le nom du cellier nest pas changer faire apparaitre ce message else, faire apparaitre les celliers de lusager-->

    <section class="my-6 ">

        <p class="mb-2 font-roboto font-bold text-lg">Bienvenue NomAajouter</p>
        <p class="">Votre premier cellier est créer! 
        <p class="">Nous vous invitons à le renommer et à parcourir la liste de nos bouteilles afin de pouvoir bâtir votre cellier ou vous créer une liste d'achat.</p>

    </section>


    <!-- section des boutons d'actions rapides 
         TODO: handle click sur les boutons
         -->
    <section class="flex gap-3 my-6 font-bold text-sm">
        @livewire('layouts.button', ['label' => 'Renommer mon premier', 'class' => 'bg-gold  rounded-lg items-center p-2'])

        @livewire('layouts.button', ['label' => 'Ajouter un Cellier', 'class'=>'bg-gold   rounded-lg items-center p-2'])

        <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="/bottles" class="bg-gold border-2 rounded-lg p-2 text-center">Liste des bouteille</a>
       

    </section>






    <!-- 
<h1>Actions rapide</h1>
    <a href="/bottles" class="border-2 border-gold rounded-lg items-center p-4">Voir la liste des bouteille</a>
    <a href="" class="border-2 border-gold rounded-lg items-center p-4">Créer un cellier</a>
    <a href="/cellars" class="border-2 border-gold rounded-lg items-center p-4">voir mes cellier</a>
    <a href="" class="border-2 border-gold rounded-lg items-center p-4">profil</a> -->
</section>