<?php

namespace App\Http\Livewire\UserInterface\ContactUs;

use Livewire\Component;

class ContactUs extends Component
{

    public $full_name, $email,$contact_no,$message;
    public function render()
    {
        return view('livewire.user-interface.contact-us.contact-us')->slot('main');
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
