<?php

namespace App\Http\Livewire\Cellars;

use Livewire\Component;
use App\Models\Cellar;

class SingleCellar extends Component
{
    public $cellarId;
    public $cellar;
    public $count;
    public $newName;
    protected $listeners = ['bottleDeleted' => 'handleBottleDeleted', 'updateCellarName' => 'updateName'];

    public $editing ;

    // Recupère l'id dans le URL de la page directement à l'ouverture
    public function mount($cellar_id)
    {
        $this->cellarId = $cellar_id;
    }
      
    // Permet de faire l'édition du nom du cellier
    public function updateName($newName){
        $this->newName = $newName;

        $this->validate([
            'newName' => 'required|max:100', 
        ]);
        $cellar = Cellar::findOrFail($this->cellarId);
        $cellar->name = $this->newName;
        $cellar->save();
    }
    

    public function handleBottleDeleted()
    {
        $this->cellar = Cellar::with(['bottles' => function ($query) {
            $query->whereNull('bottle_in_cellars.deleted_at');
        }])->where('id', $this->cellarId)->first();   
    }

    // montre les bouteilles associées au cellier qui n'ont pas de valeur dans la colonne 'deleted_at'
    public function render()
    {
        $this->cellar = Cellar::with(['bottles' => function ($query) {
            $query->whereNull('bottle_in_cellars.deleted_at');
        }])->where('id', $this->cellarId)->first();
        
        return view('livewire.Cellars.single-cellar', ['cellar' => $this->cellar]);
    }    
}
