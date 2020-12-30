<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    /**
        * The attributes that are mass assignable.
        *
        * @var array
     */

    protected $fillable = ['package_title', 'stripe_id','recurring_period','status'];
    
}
