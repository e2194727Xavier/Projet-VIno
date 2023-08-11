<?php

namespace App\Http\Livewire\Layouts;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.Layouts.footer');
    }
    public function redirectToAddBottle()
    {
        $url = route('add-bottle');
        return redirect($url);
    }

    public function redirectToIndex()
    {
        $url = route('index');
        return redirect($url);
    }

    public function redirectToCatalogue()
    {
        $url = route('bottles');
        return redirect($url);
    }
    

    // public function redirectToCellars()
    // {
    //     $url = route('cellars');
    //     return redirect($url);
    // }

    // public function redirectToWishlist()
    // {
    //     $url = route('wishlist');
    //     return redirect($url);
    // }
    


}

