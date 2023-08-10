<?php

namespace App\Http\Livewire\Layouts;
use Livewire\Component;

class Button extends Component
{
    public $label;
    public $class;
    public $action;

    public function mount($label = 'Envoyer', $class = 'btn btn-primary', $action = "")
    {
        $this->label = $label;
        $this->class = $class;
        $this->action = $action; 
    }

    public function handleClick()
    {
        // coder la fonction handleClick
       
    }

    public function render()
    {
        return view('livewire.Layouts.button');
    }
}
