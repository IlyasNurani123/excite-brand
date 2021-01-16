<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    use Notifiable;
    // public ContactLead $lead;

    protected $guarded = [];

    // public function __construct(ContactLead $lead)
    // {
    //     $this->lead = $lead;
    // }
    


}
