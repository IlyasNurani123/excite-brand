<?php

namespace App\Http\Livewire\Admin\Logos;

use App\Models\Logo;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class LogoImage extends Component
{

    Public $selectedItem,$action;
   
   
    public function render()
    {
        return view('livewire.admin.logos.logo',[
            'logos' => Logo::get(),
        ]);
    }

    protected $listeners = [
        "delete"=> 'deleteLogo',
        'refreshPage'=> '$refresh',
   ];

    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function deleteLogo(){
        $logo = Logo::findOrfail($this->selectedItem);
        Storage::delete('storage/'.$logo->logo_url);
        $logo->delete();
        session()->flash('message', 'Record delete successfully');
        session()->flash('alert-class', 'alert-danger');
    }

}
