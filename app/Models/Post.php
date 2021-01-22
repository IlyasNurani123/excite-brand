<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Image;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    // protected $primaryKey = 'slug';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['post_title','article','user_id','catagory_id','status','feature_image'];

    public function setPostTitleAttribute($value){
        $this->attributes['post_title'] =$value;
        $this->attributes['slug'] =Str::slug($value);
    }

     /**
     * Get all of the post's comments.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }


    public function catagory(){
        return $this->belongsTo(Catagory::class);
    }
   
}
