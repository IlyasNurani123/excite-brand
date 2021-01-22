<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory,SoftDeletes;
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['image_url'];


    protected $casts = [
        'status' => 'boolean',
    ];

      /**
     * Get the parent commentable model (post or video).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
