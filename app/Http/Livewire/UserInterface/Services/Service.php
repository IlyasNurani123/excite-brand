<?php

namespace App\Http\Livewire\UserInterface\Services;

use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        return view('livewire.user-interface.services.service')->slot('main');
    }
}
