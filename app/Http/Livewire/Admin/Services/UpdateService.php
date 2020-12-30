<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateService extends Component
{
    public $service;

    public function mount(Service $service){

            $this->service = $service;
    }
    public function render()
    {
        return view('livewire.admin.services.update-service');
    }
}
