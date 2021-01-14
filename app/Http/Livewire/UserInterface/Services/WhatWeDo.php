<?php

namespace App\Http\Livewire\UserInterface\Services;

use Livewire\Component;

class WhatWeDo extends Component
{
    public function render()
    {
        return view('livewire.user-interface.services.what-we-do')->layout('layouts.guest');
    }
}
