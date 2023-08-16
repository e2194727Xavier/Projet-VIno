<?php

namespace App\Http\Livewire\Layouts;
use Livewire\Component;

class Header extends Component
{
    public $user;
    public function render()
    {
        $this->user = auth()->user(); // pour avoir acces au données de l'utilisateur connecté 
        return view('livewire.Layouts.header');
    }

    
    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->to('login');
    }
}
