<?php

namespace App\Http\Livewire\Admin\Testimonials;

use Livewire\Component;
use App\Models\FeedBack;

class Testimonial extends Component
{

    public $action;
    public $selectedItem;
    protected $listeners = ["delete" => "onDelete"];

    public function render()
    {
        return view('livewire.admin.testimonials.testimonial',
    ['testimonials'=> FeedBack::get()]);
    }

    
    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }
    public function onDelete(){
        $service = FeedBack::findOrfail($this->selectedItem);
        $service->delete();
        session()->flash('message', 'service delete successfully');
        session()->flash('alert-class', 'alert-danger'); 
    }
}
