<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeoServiceForm extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable =['google_ads_service','seo_service','web_design_service','price','name','email','contact_no'];
}
