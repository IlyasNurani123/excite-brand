<?php

namespace App\Http\Livewire\UserInterface\Blog;

use App\Models\Post;
use Livewire\Component;
use App\Models\Catagory;

class BlogIndex extends Component
{
    public function render()
    {
        $lattest = Post::with("catagory")->where('status', true)->latest()->get();
        return view('livewire.user-interface.blog.blog-index',compact('lattest'))->layout('layouts.guest');
    }
}
