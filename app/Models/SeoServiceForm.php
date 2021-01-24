<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoServiceForm extends Model
{
    use HasFactory;

    protected $fillable =['google_ads_service','seo_service','web_design_service','price','name','email','contact_no'];
}
