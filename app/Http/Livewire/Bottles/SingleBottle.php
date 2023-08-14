<?php

namespace App\Http\Livewire\Bottles;
use Livewire\Component;
use App\Models\Bottle;
use Illuminate\Support\Facades\Auth;

class SingleBottle extends Component
{
    public $bottleId;
    public $bottle;


    // Handle the passed parameter
    public function mount($bottle_id)
    {
        $this->bottleId = $bottle_id;
        $this->loadBottle();
    }

    
    public function render()
    {
        //Exemple, tu peux l'utiliser où tu en as de besoin pour accéder à l'id c'est $cellar['id'] et le nom $cellar['name']
        $cellar=session('cellar_inf');
        // dd($cellar);
        

        return view('livewire.Bottles.single-bottle', ['bottle' => $this->bottle]);
    }

    public function loadBottle(){
        $this->bottle = Bottle::find($this->bottleId);
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
                // $firstCellar->bottles()->attach($selectedBottle->id);
    
                // Optionally, you can add quantity to the pivot table if needed
                $firstCellar->bottles()->attach($selectedBottle->id, ['quantity' => 1]);
            }
        }
    }
}

