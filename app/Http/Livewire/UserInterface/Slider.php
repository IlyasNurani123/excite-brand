<?php

namespace App\Http\Livewire\UserInterface;

use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        return view('livewire.user-interface.slider')->slot('main');
    }
}
