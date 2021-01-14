<?php

namespace App\Http\Livewire\UserInterface\Services\SeoService;

use Livewire\Component;

class SeoIndex extends Component
{
    public function render()
    {
        return view('livewire.user-interface.services.seo-service.seo-index')->layout('layouts.guest');
    }
}
