<?php

namespace App\Http\Livewire\UserInterface\Blog;

use App\Models\Post;
use Livewire\Component;
use App\Models\Catagory;

class PostBycategory extends Component
{
   public  $slug;

   public function mount($category){

        $this->slug = $category;

   }

    public function render()
    {
        $cat_id = Catagory::where('slug',$this->slug)->get()[0]->id;
        $cat = Catagory::find($cat_id);
        $posts = $cat->posts;
        return view('livewire.user-interface.blog.post-bycategory', compact('posts'))->layout('layouts.guest');
    }
}
