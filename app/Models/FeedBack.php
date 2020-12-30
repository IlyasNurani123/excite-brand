<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['name', 'email','review','rating','user_id'];

    /**
     * 
     * get user review
     */

    public function user(){
        return $this->hasOne(User::class);
    }

    
}
