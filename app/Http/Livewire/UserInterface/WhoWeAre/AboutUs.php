<?php

namespace App\Http\Livewire\UserInterface\WhoWeAre;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.user-interface.who-we-are.about-us')->layout('layouts.guest');
    }
}
