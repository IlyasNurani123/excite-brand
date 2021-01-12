<?php

namespace App\Http\Livewire\UserInterface;

use Livewire\Component;

class HappyClient extends Component
{

    
    public function render()
    {
       
        return view('livewire.user-interface.happy-client')->slot('main');
    }
}
