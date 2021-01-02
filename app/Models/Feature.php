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
    protected $fillable = ['feature_title','status','unit_price','service_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * 
     * get service
     */

     public function service(){
         
         return $this->belongsTo(Service::class);
     }
}
