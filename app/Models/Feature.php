<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;
 /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['feature_title', 'status','unit_price','service_id'];

    /**
     * 
     * get service
     */

     public function service(){
         
         return $this->belongsTo(Service::class);
     }
}
