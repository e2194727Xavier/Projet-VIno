<section class="mx-4 my-4 flex flex-col justify-center gap-4 font-roboto ">

<h1 class="mb-2 font-roboto font-bold text-xl">Vino, Votre vin, à portée de main.</h1>

    <!-- Section pour afficher le cellier de l'utilisateur boucle pour les celliers de lutilisateur many-cellars-->

    <h2 class="my-4 font-bold text-lg">Mes Celliers</h2>
    <div class="border-2 border-gold rounded-lg items-center p-2 flex justify-between">
        <p class="uppercase">{{ $cellar['name'] ?? '' }}</p>
        @livewire('layouts.button', ['label' => 'Modifier', 'class' => 'uppercase font-semibold text-sm bg-gold rounded-lg p-2'])
    </div>

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
        @livewire('layouts.button', ['label' => 'Renommer mon cellier 1', 'class' => 'uppercase bg-gold  rounded-lg items-center px-4 py-8'])

        @livewire('layouts.button', ['label' => 'Ajouter un Cellier', 'class'=>'uppercase bg-gold   rounded-lg items-center px-4 py-8'])

        <!-- utilisation du lien pour la liste des bouteilles -->
        <a href="/bottles" class="bg-gold rounded-lg px-4 py-8 text-center uppercase">Catalogue des bouteilles</a>
       

    </section>
</section>