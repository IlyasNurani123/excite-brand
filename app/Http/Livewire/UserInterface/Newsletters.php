<?php

namespace App\Http\Livewire\UserInterface;

use Livewire\Component;
use Spatie\Newsletter\Newsletter;

class Newsletters extends Component
{
    public function render()
    {
        return view('livewire.user-interface.newsletters')->slot('main');
    }

    public function suscribeNewsletter(){

        if ( ! Newsletter::isSubscribed($this->email) ) 
        {
            Newsletter::subscribePending($this->email);

             return redirect()->to('admin/user-interface.newsletters')->with('success','suscribed');
        }
        return redirect()->to('admin/user-interface.newsletters')->with('fail','suscribe failed');
            
    }
}
