<?php

namespace App\Http\Livewire\UserInterface\Services\WeDesign;

use Livewire\Component;

class WeDesign extends Component
{
    public function render()
    {
        return view('livewire.user-interface.services.we-design.we-design')->layout('layouts.guest');
    }
}
