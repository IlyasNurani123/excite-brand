<?php

namespace App\Http\Livewire\UserInterface\Services\WePromote;

use Livewire\Component;

class PromoteIndex extends Component
{
    public function render()
    {
        return view('livewire.user-interface.services.we-promote.promote-index')->layout('layouts.guest');
    }
}
