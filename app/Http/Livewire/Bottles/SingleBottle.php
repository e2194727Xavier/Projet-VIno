<?php

namespace App\Http\Livewire\Bottles;


use Livewire\Component;
use App\Models\Bottle;
use Illuminate\Support\Facades\Auth;

class SingleBottle extends Component
{
    public $bottleId;
    public $bottle;
    public $showQuantity = false;

    // Handle the passed parameter
    public function mount($bottle_id, $showQuantity = false)
    {
        $this->bottleId = $bottle_id;
        $this->showQuantity = $showQuantity;
        if (!$this->showQuantity) {
            // $cellar = session('cellar_inf');
            // if ($cellar && $this->bottle) {
            //     $quantityInCellar = $this->bottle->pivot->quantity ?? 0;
            //     // $quantityInCellar = $this->bottle->cellars->first()->pivot->quantity ?? 0;
            //     $this->quantity = $quantityInCellar;
            // } else {
            //     $this->quantity = 0;
            // }
            $cellar = session('cellar_inf');
            // $cellar = Cellar::find($cellarId);
            // $bottle = $cellar->bottles->find($bottle_id);
            
            // $quantityInCellar = $bottle->pivot->quantity ?? 0;
            // dd($quantityInCellar);
        } else {
            $this->quantity = 1;
        }
    }

    public function render()
    {
        //Exemple, tu peux l'utiliser où tu en as de besoin pour accéder à l'id c'est $cellar['id'] et le nom $cellar['name']
        $cellar = session('cellar_inf');
        // dd($cellar);
        $this->bottle = Bottle::find($this->bottleId);

        return view('livewire.Bottles.single-bottle', [
            
            'bottle' => $this->bottle,
            'showQuantity' => $this->showQuantity,
            'quantityInCellar' => $this->quantity
        ,
            'showQuantity' => $this->showQuantity,
            'quantityInCellar' => $this->quantity
        ]);
    }

    public function addToCellar()
    {
        $user = Auth::user();
        $selectedBottle = $this->bottle;
        // dd($user->cellars);
        // dd(session('cellar_inf'));

        if ($user) {
            $firstCellar = $user->cellars->first(); // Get the first cellar

            if ($firstCellar) {
                $existingBottle = $firstCellar->bottles()->where('bottle_id', $selectedBottle->id)->first();

                if ($existingBottle) {
                    // Update the existing quantity
                    $existingBottle->pivot->quantity += $this->quantity;
                    $existingBottle->pivot->save();
                    $this->quantity = 1;
                } else {
                    // Attach the bottle with the new quantity
                    $firstCellar->bottles()->attach($selectedBottle->id, ['quantity' => $this->quantity]);
                }
            }
        }
    }

    public $quantity = 1;

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }
}
