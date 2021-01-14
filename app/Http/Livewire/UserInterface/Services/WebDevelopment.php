<?php

namespace App\Http\Livewire\UserInterface\Services;

use Livewire\Component;

class WebDevelopment extends Component
{
    public function render()
    {
        return view('livewire.user-interface.services.web-development')->layout('layouts.guest');
    }
}
