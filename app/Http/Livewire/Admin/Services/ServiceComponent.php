<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ServiceComponent extends Component
{
    public $action;
    public $selectedItem;
    protected $listeners = ["delete" => "onDelete"];

    
    public function render()
        {
            return view('livewire.admin.services.service-component',[
                'services' => Service::all(),
                ])->slot('main');
        }

        public function selectItems($itemId,$action){
            $this->action = $action;
            $this->selectedItem = $itemId;
       }
        public function onDelete(){
            $service = Service::findOrfail($this->selectedItem);
            Storage::delete('storage/'.$service->project_image);
            $service->delete();
            session()->flash('message', 'service delete successfully');
            session()->flash('alert-class', 'alert-danger'); 
        }
}
