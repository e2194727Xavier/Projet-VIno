<section class="mx-4 my-4 flex flex-col justify-center gap-4 font-roboto ">

<h1 class="mb-2 font-roboto font-bold text-xl">Vino, Votre vin, à portée de main.</h1>

    <!-- Section pour afficher le cellier de l'utilisateur boucle pour les celliers de lutilisateur many-cellars-->

    @livewire('cellars.many-cellars')
    
    <!-- section a ajouter tant et aussi longtemps que le premier cellier naura pas été renommé ? 
     si le nom du cellier nest pas changer faire apparaitre ce message else, faire apparaitre les celliers de lusager-->

    <section class="my-6 ">
      
        <p class="mb-2 font-roboto font-bold text-lg">Votre premier cellier est créer! </p>
        <p class="">La première étape consiste à renommer le cellier créé par défaut lors de votre inscription et vous pourrez commencer à ajouter vos bouteilles.</p>
        <p>Notre catalogue contient plus de 8000 sorte de vin différents à ajouter à votre collection ou à inscrire sur votre liste d'achat!</p>
    </section>


    <!-- section des boutons d'actions rapides 
         TODO: handle click sur les boutons
         -->
    <section class="flex justify-between gap-3 my-6 font-bold text-sm">

        <a href="{{ route('add-bottle') }}" class="bg-gold rounded-lg px-4 py-8 text-center ">Ajouter une bouteille</a>        <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="{{ route('add-cellar') }}" class="bg-gold rounded-lg px-4 py-8 text-center ">Ajouter un cellier</a>        <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="{{ route('bottles') }}" class="bg-gold rounded-lg px-4 py-8 text-center ">Catalogue des bouteilles</a>
       

    </section>
</section>