<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['slider_tilte', 'heading','description','button_text','status','slider_image'];

     /**
     * Get all of the post's comments.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
