<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cellar;

class RenameCellar extends Component
{
    public $renamingInProgress = false; 

    public function rename(){
        $this->renamingInProgress = true; 
        $cellarInfo = session()->get("cellar_inf");
        dd($cellarInfo);
   /*      $id = $cellarInfo['ids'][0];
        $cellar = Cellar::find($id);
        if ($cellar) {
            // renomme le cellier ici, ceci sera fait avec une variable
            $name = $cellar->name = 'ppp';
            $cellar->save();
            // 
            $index = array_search($cellar->id, $cellarInfo['ids']);
            $cellarInfo['names'][$index] = $name;
            session()->put("cellar_inf", $cellarInfo);
        }
        $cellarInfo = session()->get("cellar_inf"); 
        */


        
    }
    public function render()
    {
        return view('livewire.rename-cellar');
    }
}
