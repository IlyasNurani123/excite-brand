<?php

namespace App\Http\Livewire\UserInterface\Blog;

use App\Models\Post;
use Livewire\Component;
use App\Models\Catagory;
use Livewire\WithPagination;

class BlogIndex extends Component
{
    use WithPagination;

    public $slug;

    public function render()
    {
        $posts = Post::with("catagory")->where('status', true)->latest()->paginate(5);
        $catagories = Catagory::paginate(20);
        return view('livewire.user-interface.blog.blog-index',compact('posts','catagories'))->layout('layouts.guest');
    }
}
