<?php

namespace App\Http\Livewire\Admin\Posts;
use App\Models\Post;

use Livewire\Component;
use App\Models\Catagory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UpdatePost extends Component
{
    use WithFileUploads;

    public $post_id;
    public $post_title;
    public $article;
    public $user_id;
    public $tag_title;
    public $feature_image;
    public $status;
    public $tag_id;
    public $category_name;
    public $iteration;
    public $category_id;
    


    public function mount($id){

        $this->post_id = $id;
        $post = Post::findOrFail($this->post_id);
        $this->post_title = $post->post_title;
        $this->category_id = $post->catagory_id;
        $this->tag_title = $post->tag_title;
        $this->publish_date = $post->publish_date;
        $this->article = $post->article;
        $this->status = $post->status;
    }


    public function render()
    {
        return view('livewire.admin.posts.update-post',[
            'categories' => Catagory::get(),
            'selected_category' => $this->category_id
        ]);
    }


     /**
     * Validatiion 
     * 
     * @var array[]
     */

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    private function resetInputFields(){
        $this->post_title = '';
        $this->article = '';
        $this->tag_title='';
        $this->status = '';
        $this->user_id = '';
        $this->category_id='';
        $this->feature_image = '';
    }


    protected $rules = [

        'post_title' => 'required|string|max:255',
        'article' => 'required | string',
];

         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function updatePost()
    {
         $this->validate();
        $post =Post::findOrfail($this->post_id);
        $post->update([
            'post_title' => $this->post_title,
            'user_id' => Auth::user()->id,
            'catagory_id' =>$this->category_id,
            'article' => $this->article,
            'status' =>$this->status,
        ]);
        session()->flash('message', 'post Updated Successfully.');
        session()->flash('alert-class', 'alert-success');
        $this->resetInputFields();
        return redirect()->to('admin/posts');
    }

}
