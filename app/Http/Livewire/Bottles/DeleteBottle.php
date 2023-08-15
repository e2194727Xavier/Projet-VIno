<?php

namespace App\Http\Livewire\Bottles;
use Livewire\Component;
use App\Models\BottleInCellar;

class DeleteBottle extends Component
{
    public $bottleId;
    public $cellarId;

    protected $listeners = ['triggerDeleteBottle' => 'handleTriggerDeleteBottle'];

    public function handleTriggerDeleteBottle($bottleId, $cellarId)
    {
        
        $this->bottleId = $bottleId;
        $this->cellarId = $cellarId;

        $this->deleteBottle();
    }

    public function deleteBottle()
    {
        $bottleInCellar = BottleInCellar::where('bottle_id', $this->bottleId)
            ->where('cellar_id', $this->cellarId)
            ->first();

        if ($bottleInCellar) {
            $bottleInCellar->delete();
        }

        $this->emit('bottleDeleted');
    }

    public function handleBottleDeleted()
    {
        session()->flash('message', 'Bottle successfully deleted.');
    }
}