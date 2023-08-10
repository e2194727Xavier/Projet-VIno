<?php

namespace App\Http\Livewire;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public $cellars;
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

    public function handleChange($value) {
        $this->emit('inputChanged', $value); 
     
    }
    

    public function mount()
    {
        // Récupérer les informations du cellier depuis la session ou autre source
        $this->cellars = session('cellar_inf');
      /*   dd($this->cellar); */
    }

    public function render()
    {

        return view('livewire.Layouts.index', ['cellars' => $this->cellars]);
    }
}
