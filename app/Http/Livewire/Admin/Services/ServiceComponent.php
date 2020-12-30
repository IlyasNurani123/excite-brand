<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceComponent extends Component
{

public function render()
    {
        
        return view('livewire.admin.services.service-component',[
            'services' => Service::all(),
        ])->slot('main');
    }
}
