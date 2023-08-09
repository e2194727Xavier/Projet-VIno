<section class="mx-4 flex flex-col justify-center gap-4 ">


    <!-- Section pour afficher le cellier de l'utilisateur -->
    <!-- @php
    $cellar = session('cellar_inf', []);
    @endphp -->




    <h2 class="mt-4">Mes Celliers</h2>
    <div class="border-2 border-gold rounded-lg items-center p-2 flex justify-between">
        <p>{{ $cellar['name'] ?? '' }}</p>
        @livewire('layouts.button', ['label' => 'Renommer', 'class' => 'text-xs bg-gold rounded-lg p-2'])


    </div>

    <!-- section a ajouter tant et aussi longtemps que le premier cellier naura pas été renommé ?  -->
    <h1>Bienvenue NomAajouter</h1>
    <p>Votre premier cellier est créer, nous vous invitons à le renommer et à parcourir la liste de nos bouteilles afin de pouvoir bâtir votre cellier ou vous créer une liste d'achat.</p>


    <div class="flex gap-2 my-4">
        @livewire('layouts.button', ['label' => 'Renommer mon premier', 'class' => 'bg-gold border-2 border-gold rounded-lg items-center p-2'])
        @livewire('layouts.button', ['label' => 'Ajouter un Cellier', 'class'=>'bg-gold border-2 border-gold rounded-lg items-center p-2'])
        @livewire('layouts.button', ['label' => 'Voir la liste des bouteilles', 'class'=>'bg-gold border-2 border-gold rounded-lg items-center p-2'])

    </div>






    <!-- 
<h1>Actions rapide</h1>
    <a href="/bottles" class="border-2 border-gold rounded-lg items-center p-4">Voir la liste des bouteille</a>
    <a href="" class="border-2 border-gold rounded-lg items-center p-4">Créer un cellier</a>
    <a href="/cellars" class="border-2 border-gold rounded-lg items-center p-4">voir mes cellier</a>
    <a href="" class="border-2 border-gold rounded-lg items-center p-4">profil</a> -->
</section>