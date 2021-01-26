<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ShowPost extends Component
{
    use WithPagination;
    
    public $selectedItem,$actions;

    public function render()
    {
       $posts = Post::with('catagory','tags','images')->paginate(10);
      
        return view('livewire.admin.posts.show-post',compact('posts'))->slot('main');
    }

    protected $listeners = [
        "delete"=> 'onDelete',
   ];

    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }

   public function updateStatus($id, $status){
    $banner = Post::findOrfail($id);
    $s = $status === 1? 0: 1;
    $status1= $banner->update([
        'status' => $s
    ]);
}

   public function onDelete(){

    $post = Post::findOrfail($this->selectedItem);
    $post->delete();
    session()->flash('message', 'post delete successfully');
    session()->flash('alert-class', 'alert-danger'); 
}





}
