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
        $this->editing = false;
    }

    public function handleChange($value) {
        $this->emit('inputChanged', $value); 
     
    }

    // Récupérer les informations du cellier depuis la session ou autre source
    public function mount()
    {
        $this->cellars = session('cellar_inf');
    }

    public function render()
    {
        return view('livewire.Layouts.index', ['cellars' => $this->cellars]);
    }
}
