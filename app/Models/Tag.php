<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['title','post_id'];
   /**
     * Get the parent commentable model (post or video).
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
