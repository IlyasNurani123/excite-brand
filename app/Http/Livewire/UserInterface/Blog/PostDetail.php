<?php

namespace App\Http\Livewire\UserInterface\Blog;

use App\Models\Post;
use Livewire\Component;

class PostDetail extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
        
     }
     
    public function render()
    {
        $post = Post::where('slug',$this->slug)->get();
        return view('livewire.user-interface.blog.post-detail',compact('post'))->layout('layouts.guest');
    }
}
