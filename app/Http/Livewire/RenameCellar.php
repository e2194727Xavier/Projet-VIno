<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cellar;
use Illuminate\Queue\Listener;

class RenameCellar extends Component
{
    public $showInput = false;
    public $cellarId; 
    public $newName; 
  /*  protected $listerners= ['startRename']; */
  protected $listeners = ['inputChanged' => 'startRename'];

    public function mount($cId=null){
        $this->cellarId = $cId;
    }

   

    public function startRename(){
        $this->showInput = true;
    }


    public function rename(){
        $this->showInput = false;
      /*   dd($this->cellarId); */
       /*  $cellarInfo = session()->get("cellar_inf"); */
      /*   $id = $this->cellarId;
        $cellar = Cellar::find($id);
        if ($cellar) {
            // renomme le cellier ici, ceci sera fait avec une variable
            $name = $cellar->name;
            $cellar->save();
            // 
            $index = array_search($cellar->id, $cellarInfo['ids']);
            $cellarInfo['names'][$index] = $name;
            session()->put("cellar_inf", $cellarInfo);
        }
        $cellarInfo = session()->get("cellar_inf");  */
       


        
    }

    public function render()
    {
        return view('livewire.rename-cellar');
    }
}
