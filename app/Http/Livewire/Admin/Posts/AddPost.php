<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddPost extends Component
{
    public $post_id;
    public $post_title;
    public $article;
    public $user_id;
    public $tag_title;
    public $post_image;
    public $status;
    public $tag_id;


    public function render()
    {
        return view('livewire.admin.posts.add-post');
    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    private function resetInputFields(){
        $this->post_title = '';
        $this->article = '';
        $this->tag_title='';
        $this->post_image = '';
        $this->status = '';
        $this->user_id = '';
    }

     /**
     * Validatiion 
     * 
     * @var array[]
     */
    protected $rules = [

            'post_title' => 'required|string|max:255',
            'article' => 'required | string',
            'post_image' => 'nullable |image'
    ];
    
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function updateOrStorePost()
    {
         $this->validate();
        Post::updateOrCreate(['id' => $this->post_id], [
            'post_title' => $this->post_title,
            'user_id' => Auth::user()->id,
            'article' => $this->article,
        ]);
        session()->flash('message', 
        $this->post_id ? 'post Updated Successfully.' : 'post Created Successfully.');
        session()->flash('alert-class', 'alert-success');
        // return redirect()->to('admin/service/post');
        $this->resetInputFields();
    }

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->post_title = $post->post_title;
        $this->tag_title = $post->tag_title;
        $this->publish_date = $post->publish_date;
        $this->article = $post->article;
        $this->user_id = $post->user_id;
    }

    public function addTags(){

        $this->validate([
            'tag_title' => 'required | string'
        ]);
        $post = Post::get()->last();
            if(!empty($post)){
                $post->tags()->create(['id' => $this->tag_id], [
                    'title' => $this->tag_title,
                ]);
            }
        
            
        dd($tags);
    }

}
