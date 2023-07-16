
<div class=" flex flex-col items-end">
    <h1>Bienvenu</h1>
        @auth
        <p>Connecté en tant que {{ $user->email }}</p>
        <button wire:click="logout">Déconnexion</button>
        @endauth
        </div>
</div>
