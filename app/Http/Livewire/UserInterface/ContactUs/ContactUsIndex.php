<?php

namespace App\Http\Livewire\UserInterface\ContactUs;

use Livewire\Component;

class ContactUsIndex extends Component
{
    public function render()
    {
        return view('livewire.user-interface.contact-us.contact-us-index')->layout('layouts.guest');
    }
}
