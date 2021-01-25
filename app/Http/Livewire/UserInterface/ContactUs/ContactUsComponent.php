<?php

namespace App\Http\Livewire\UserInterface\ContactUs;

use Mail;
use App\Models\User;
use Livewire\Component;
use App\Models\ContactUs;
use App\Mail\ContactLeadMailable;
use App\Actions\EmailContactLeadAction;
use App\Notifications\ContactUsNotification;
use Illuminate\Support\Facades\Notification;

class ContactUsComponent extends Component
{

    public $full_name;
    public $email;
    public $contact_no;
    public $message;

    public function render()
    {
        return view('livewire.user-interface.contact-us.contact-us')->slot('main');
    }

    protected $rules = [
            'full_name' => 'required|min:3',
             'email' => 'required|email|min:4',
             'contact_no' => 'required|min:6',
             'message' => 'nullable',
    ];


/**
     * Resest All input fields 
     * 
     * @var array[]
     */
    private function resetInputFields(){
        $this->full_name ="";
        $this->email ="";
        $this->contact_no ="";
        $this->message = "";
    }
         


    public function submitContactUsForm(){
        
        $validated = $this->validate(); 

    
       $data= ContactUs::firstOrCreate($validated);
      
       Mail::to('airlinkuk2013@gmail.com')->queue(new getQuoteRequest($data->toArray()));

        
       $data->notify(new ContactUsNotification($validated));

         session()->flash('message','Thank you for your message. It has been sent.');
         $this->resetInputFields();

     }
}
