<?php

namespace App\Http\Livewire\UserInterface;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.user-interface.index')->layout('layouts.guest');
    }
}
