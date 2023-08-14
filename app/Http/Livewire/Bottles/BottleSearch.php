<?php

namespace App\Http\Livewire\Bottles;
use Livewire\WithPagination;
use App\Models\Bottle;
use Livewire\Component;

class BottleSearch extends Component
{
    use WithPagination;
    public $search = '';
    public $results = [];
    public $selectedBottle;
    
    public function fetchResults()
        {
            if (!empty($this->search)) {
                $bottles = Bottle::where(function ($query) {
                    $query->where('name', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('description', 'LIKE', '%' . $this->search . '%');
                    if (is_numeric($this->search)) {
                        $query->orWhere(function ($subquery) {
                            $subquery->where('code_saq', 'LIKE', $this->search . '%')
                                    ->orWhereBetween('price', [(float)$this->search, (float)$this->search + 0.999999]);
                        });
                    }
                })->paginate(10, ['*'], 'page', $this->page); // Use $this->page to fetch the correct page of results

                $newResults = collect($bottles->items())->map(function ($bottle) {
                    return [
                        'id' => $bottle->id ?? '',
                        'name' => $bottle->name ?? '',
                        'description' => $bottle->description ?? '',
                        'code_saq' => $bottle->code_saq ?? '',
                        'price' => $bottle->price ?? 'Not available',
                    ];
                })->toArray();

                if ($this->page === 1) {
                    $this->results = $newResults;
                } else {
                    $this->results = array_merge($this->results, $newResults);
                }
            } else {
                $this->results = [];
            }
        }

    public $page = 1;

    public function loadMore()
        {
            $this->page++;
            $this->fetchResults();
        }

    public function updatedSearch()
        {
            $this->resetPage();
            $this->fetchResults();
        }

    public function selectResult($resultId)
        {
            $selectedBottle = Bottle::find($resultId);
            $this->search = $selectedBottle->name;
            $this->results = [];
            // $this->selectedBottle = $bottle;

            // dd($selectedBottle);
        
            $this->emit('resultSelected', $selectedBottle);
        }
        
    public function handleSearch()
        {
            $this->results = [];
            $this->emit('searchPerformed', $this->search);
        }

    public function render()
        {
            return view('livewire.Bottles.bottle-search');
        }

}
