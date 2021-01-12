<?php

namespace App\Http\Livewire\UserInterface;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{

    public $full_name, $email,$contact_no,$message;
    
    public function render()
    {
        return view('livewire.user-interface.contact-us')->layout('layouts.guest')->slot('main');
    }

    public function submitContactUsForm(){
        
       $request = $this->validate([
            'full_name' => 'required|min:3',
            'email' => 'required|email|min:4',
            'phone' => 'nullable|min:4',
            'message' => 'required',
        ]);

        $to = 'ilyasnurani1994@gmail.com';
        Mail::to($to)->send(new ContactUs($request));
    }
}
