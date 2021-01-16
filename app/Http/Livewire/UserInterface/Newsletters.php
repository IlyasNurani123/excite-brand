<?php

namespace App\Http\Livewire\UserInterface;

use Livewire\Component;
use Newsletter;;



class Newsletters extends Component
{

    public $email;

    public function render()
    {
        return view('livewire.user-interface.newsletters')->slot('main');
    }


    public function resetField(){
        $this->email ="";
    }

    protected $rules = [
        'email' => 'required|email',
    ];

    public function suscribeNewsletter(){
       
        $this->validate();

        if ( ! Newsletter::isSubscribed($this->email) ) 
        {
            Newsletter::subscribePending($this->email);

            session()->flash('message','suscribed.');
            session()->flash('alert-class', 'alert-success');
            $this->resetField();
        }
        session()->flash('message','suscribe failed');
        session()->flash('alert-class', 'alert-danger');
            
    }
}
