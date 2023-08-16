<?php

namespace App\Http\Livewire\Search;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bottle;
use App\Models\Cellar;

class SearchAdvancedResults extends Component
{
    use WithPagination;

    public $component = 'bottles';
    protected $paginationTheme = "tailwind";
    protected $bottles = [];

    protected $queryString = ['search', 'priceMin', 'priceMax', 'description', 'page'];

    public $search;
    public $priceMin;
    public $priceMax;
    public $description;
    public $cellars;

    protected $listeners = ['searchPerformance' => 'performSearch'];

    public function mount()
    {
        $this->search = request()->query('search', null);
        $this->priceMin = request()->query('priceMin', 0);
        $this->priceMax = request()->query('priceMax', 0);
        $this->description = request()->query('description', null);
        $this->loadBottles();
        $user_id = auth()->user()->id;
        $this->cellars = Cellar::where("user_id", $user_id)->get();
    }

    public function render()
    {
        return view('livewire.Bottles.many-bottles', [
            'bottles' => $this->bottles,
            'search' => $this->search,
            'priceMin' => $this->priceMin,
            'priceMax' => $this->priceMax,
            'description' => $this->description,
        ]);
    }

    // selon l'écouteur d'évènement searchPerformance, lance le chargement des bouteilles
    public function performSearch()
    {
        $this->loadBottles();
    }

    // chargement des bouteilles
    public function loadBottles()
    {
        $query = Bottle::query();

        // Applique les filtres
        if ($this->search && $this->search !== 'null') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        if ($this->description && $this->description !== 'null') {
            $query->where('description', 'LIKE', '%' . $this->description . '%');
        }

        if ($this->priceMin && $this->priceMin !== 'null') {
            $query->where('price', '>=', $this->priceMin);
        }

        if ($this->priceMax && $this->priceMax !== 'null') {
            $query->where('price', '<=', $this->priceMax);
        }

        // Fetch les bouteilles, les ordonne et les pagine
        $this->bottles = $query->orderBy('name')->paginate(9);
    }
}
