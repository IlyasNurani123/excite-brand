<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use Livewire\Component;

class TrashIndex extends Component
{

    public $selectedItem,$actions;

    protected $listeners = [
        "delete"=> 'forceDeletePost',
        "restorePost" => "restorePost"
   ];
    public function render()
    {
        $trashPost =Post::onlyTrashed()->get();
       
        return view('livewire.admin.posts.trash-index',compact('trashPost'));
    }
   

    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }


    public function restorePost($id){

             $restore = Post::withTrashed()->where('id', $id)->restore();
        }

    public function forceDeletePost()
{
   $post= Post::withTrashed()->where('id', $this->selectedItem)->forceDelete();
    Storage::disk('public')->delete($post->feature_image);

    session()->flash('message', 'post delete successfully');
    session()->flash('alert-class', 'alert-danger');
    // return redirect()->route('/post');
        
}
}
