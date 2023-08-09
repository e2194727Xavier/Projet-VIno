<?php

namespace App\Http\Livewire;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public $cellar;
    //gestion du bouton modifier du cellier
    public $editing = false;

    public function handleClick()
    {
        $this->editing = !$this->editing;
    }

    public function saveChanges()
    {
        // Sauvegardez le nouveau nom du cellier en base de données
        // ...

        // Revenez au mode d'affichage normal
        $this->editing = false;
    }

    public function mount()
    {
        // Récupérer les informations du cellier depuis la session ou autre source
        $this->cellar = session('cellar_inf', []);
    }

    public function render()
    {

        return view('livewire.Layouts.index', ['cellar' => $this->cellar]);
    }
}
