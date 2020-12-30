<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['title', 'description','long_description','icon',];


    /**
     * get the service feature
     */

     public function features(){
         return $this->hasMany(Feature::class);
     }
}
