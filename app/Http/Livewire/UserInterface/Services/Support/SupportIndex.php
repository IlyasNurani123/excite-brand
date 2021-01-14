<?php

namespace App\Http\Livewire\UserInterface\Services\Support;

use Livewire\Component;

class SupportIndex extends Component
{
    public function render()
    {
        return view('livewire.user-interface.services.support.support-index')->layout('layouts.guest');
    }
}
