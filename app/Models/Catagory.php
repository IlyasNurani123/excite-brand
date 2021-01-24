<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catagory extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['name'];

    public function setNameAttribute($value){
        $this->attributes['name'] =$value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // public function getRouteKeyName(){
    //     return 'slug';
    // }

    public function posts(){

        return $this->hasMany(Post::class);
    }
}
