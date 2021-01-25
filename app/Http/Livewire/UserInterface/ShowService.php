<?php

namespace App\Http\Livewire\UserInterface;

use App\Models\Service;
use Livewire\Component;

class ShowService extends Component
{
    public function render()
    {
        $services = Service::limit(4)->get();;
        return view('livewire.user-interface.show-service',compact('services'));
    }
}
