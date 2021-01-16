<?php

namespace App\Actions;

use App\Models\ContactUs;
use App\Mail\ContactLeadMailable;
use Illuminate\Support\Facades\Mail;
// use Mail;
class EmailContactLeadAction
{
    // public function __invoke(array $formData)
    // {
    //     $this->getOrCreateContactLead($formData);
    // }

    // private function getOrCreateContactLead(array $formData): ContactUs
    // {
    //     return ContactUs::firstOrCreate($formData);
    // }

    // private function sendContactLeadToEmail(ContactLead $contactLead): void
    // {
    //     Mail::to(['ilyas@gmail.com'])
    //     ->queue(new ContactLeadMailable($contactLead));
    // }
}