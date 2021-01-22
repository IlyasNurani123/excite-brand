<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $selectedItem,$actions;

    public function render()
    {
       $posts = Post::with('catagory','tags','images')->get();
      
        return view('livewire.admin.posts.show-post',compact('posts'))->slot('main');
    }

    protected $listeners = [
        "delete"=> 'onDelete',
   ];

    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }

   public function onDelete(){

    $post = Post::findOrfail($this->selectedItem);
    $post->delete();
    session()->flash('message', 'post delete successfully');
    session()->flash('alert-class', 'alert-danger'); 
}





}
