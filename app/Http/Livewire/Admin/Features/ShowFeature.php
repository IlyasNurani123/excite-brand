<?php

namespace App\Http\Livewire\Admin\Features;

use App\Models\Feature;
use Livewire\Component;

class ShowFeature extends Component
{
    Public $selectedItem,$action;
   
    protected $listeners = [
        'refreshPage'=> '$refresh',
         "delete"=> 'deleteFeature'
    ];

    public function render()
    {
        $features = Feature::with('service')->get();
        return view('livewire.admin.features.show-feature', compact('features'));
    }

    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function deleteFeature(){
        $feature = Feature::findOrfail($this->selectedItem);
        $feature->delete();
        session()->flash('message', 'Record delete successfully');
        session()->flash('alert-class', 'alert-danger');
    }

  
}
