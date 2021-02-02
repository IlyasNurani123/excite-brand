<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Catagory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AddPost extends Component
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
    public $post;


    public function render()
    {
        return view('livewire.admin.posts.add-post',[
           'categories' => Catagory::get()
        ]);
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
        $this->status = '';
        $this->user_id = '';
        $this->category_id='';
        $this->feature_image = '';
    }

     /**
     * Validatiion 
     * 
     * @var array[]
     */
    protected $rules = [
            'post_title' => 'required|string|max:255',
            'article' => 'required | string',
            'feature_image' => 'nullable |image',
    ];
    
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function updateOrStorePost()
    {
         $this->validate();
         $feature_img ="";
         if(!empty($this->feature_image)){
             $feature_img= $this->feature_image->store("images/posts", "public");
         }

        Post::create([
            'post_title' => $this->post_title,
            'user_id' => Auth::user()->id,
            'catagory_id' =>$this->category_id,
            'article' => $this->article,
            'status' => $this->status,
            'feature_image' =>$feature_img
        ]);
        session()->flash('message','post Created Successfully.');
        return redirect()->to('admin/posts');
        session()->flash('alert-class', 'alert-success');
        // return redirect()->to('admin/service/post');
        $this->resetInputFields();
    }


    public function addTags(){

        $this->validate([
            'tag_title' => 'required | string'
        ]);
        $post = Post::get()->last();
            if(!empty($post)){
               $tags= $post->tags()->create([
                    'title' => $this->tag_title,
                ]);

                $post->tags()->attach($tags->id);
                session()->flash('message', 'tag Created Successfully.');
                session()->flash('alert-class', 'alert-success');
                $this->iteration++;
                resetInputFields();
            }
    }

    // public function addFeatureImage(){
    //     $this->validate([
    //         'feature_image' => 'required |image'
    //     ]);

    //     $post = Post::get()->last();
    //     if(!empty($post)){
           
    //        $img= $post->images()->create([
    //             'image_url' => $feature_img,
    //         ]);

    //         $this->iteration++;
    //         resetInputFields();
    //         session()->flash('message', 'tag Created Successfully.');
    //         session()->flash('alert-class', 'alert-success');
    //     }
        

    // }

    public function addCatagory(){

        $this->validate([
            'category_name' => 'required',
        ]);
        $category_name = Catagory::create([
            'name' =>$this->category_name
        ]);
        session()->flash('message', 'category Updated Successfully.');
        session()->flash('alert-class', 'alert-success');
        
        $this->category_name =null;
        
    }

}
