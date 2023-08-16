<?php

namespace App\Http\Livewire\Cellars;

use App\Models\Cellar;
use Livewire\Component;

class ManyCellars extends Component
{
    public $cellars;
    public $search = '';

    protected $listeners = ['searchPerformed'];

    public function mount()
    {
        $userId = auth()->id();
        $this->cellars = Cellar::where('user_id', $userId)->get();
    }

    public function render()
    {
        return view('livewire.Cellars.many-cellars', ['cellars' => $this->cellars]);
    }

    public function searchPerformed($search)
    {
        $this->search = $search;
        $this->loadCellars();
    }
}
