<?php

namespace App\Http\Livewire\Bottles;


use Livewire\Component;
use App\Models\Bottle;
use Illuminate\Support\Facades\Auth;

class SingleBottle extends Component
{
    public $bottleId;
    public $bottle;
    public $fromCatalogue;
    public $quantityInCellar;
    public $quantityFromCatalogue;

    // Handle the passed parameter
    public function mount($bottle_id, $quantityInCellar = null, $quantityFromCatalogue = null, $fromCatalogue = false)
    {
        $this->bottleId = $bottle_id;
        $this->fromCatalogue = $fromCatalogue;
        $this->quantityInCellar = $quantityInCellar;
        $this->quantityFromCatalogue = $quantityFromCatalogue;
    }

    public function render()
    {
        //Exemple, tu peux l'utiliser où tu en as de besoin pour accéder à l'id c'est $cellar['id'] et le nom $cellar['name']
        $cellar = session('cellar_inf');
        $this->bottle = Bottle::find($this->bottleId);

        return view('livewire.Bottles.single-bottle', [

            'bottle' => $this->bottle,
            'fromCatalogue' => $this->fromCatalogue,
            'quantityInCellar' => $this->quantityInCellar,  // Pass the quantityInCellar to the view
            'quantityFromCatalogue' => $this->quantityFromCatalogue,  // Pass the quantityInCellar to the view
        ]);
    }

    public function addToCellar()
    {
        $user = Auth::user();
        $selectedBottle = $this->bottle;

        if ($user) {
            $firstCellar = $user->cellars->first(); // Aller chercher le cellier de l'usager

            if ($firstCellar) {
                $existingBottle = $firstCellar->bottles()->where('bottle_id', $selectedBottle->id)->first();

                // Comportement si la bouteille se trouve déjà dans le cellier
                if ($existingBottle) {
                    // comportement si l'usager modifie les bouteilles dans son cellier
                    if ($this->quantityInCellar >= 0) {
                        // lance la fonction de suppression si la valeur est 0
                        // dd($this->quantityInCellar);
                        if ($this->quantityInCellar == '0') {
                            // Emit an event to trigger the deleteBottle function in DeleteBottle component
                            $this->emit('triggerDeleteBottle', $selectedBottle->id, $firstCellar->id);
                        }

                        $existingBottle->pivot->quantity = $this->quantityInCellar;
                        $existingBottle->pivot->save();
                    // comportement si l'usager ajoute une bouteille du catalogue
                    } elseif ($this->quantityFromCatalogue) {
                        $existingBottle->pivot->quantity += $this->quantityFromCatalogue;
                        $existingBottle->pivot->save();
                    }
                // Ajouter la bouteille au cellier si elle n'y existe pas
                } else {
                    $firstCellar->bottles()->attach($selectedBottle->id, ['quantity' => $this->quantityFromCatalogue]);
                }
            }
        }
    }

    public function deleteFromCellar(){

    }

    public function increment()
    {
        if ($this->quantityInCellar) {
            $this->quantityInCellar++;
        } elseif ($this->quantityFromCatalogue) {
            $this->quantityFromCatalogue++;
        }
    }

    public function decrement()
    {
        if ($this->quantityInCellar > 0) {
            $this->quantityInCellar--;
        } elseif ($this->quantityFromCatalogue > 0) {
            $this->quantityFromCatalogue--;
        }
    }
}
