<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.home');
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->to('welcome');
    }
}
