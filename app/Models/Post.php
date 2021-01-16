<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['post_title','article','user_id','status'];


     /**
     * Get all of the post's comments.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

     /**
     * Get all of the post's comments.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
