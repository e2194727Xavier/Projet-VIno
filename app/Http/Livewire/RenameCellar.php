<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RenameCellar extends Component
{
    public $showInput = false;
    public $cellarId;
    public $newName;

    protected $listeners = ['inputChanged' => 'startRename'];

    public function mount($cId = null)
    {
        $this->cellarId = $cId;
    }

    public function startRename()
    {
        $this->showInput = true;
    }

    public function rename()
    {
        $this->showInput = false;
    }

    public function render()
    {
        return view('livewire.rename-cellar');
    }
}
