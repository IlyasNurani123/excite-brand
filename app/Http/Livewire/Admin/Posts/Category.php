<?php

namespace App\Http\Livewire\Admin\Posts;

use Livewire\Component;
use App\Models\Catagory;

class Category extends Component
{
    public $selectedItem,$actions, $name;
 
    public function render()
    {
        return view('livewire.admin.posts.category');
    }


    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }

   public function UpdateCatagory(){

    $this->validate([
        'category_name' => 'required',
    ]);

    $catagory =Catagory::findOrfail($selectedItem);
    $category->update([
        'name' =>$this->category_name
    ]);

    session()->flash('message', 'category Updated Successfully.');
    $this->category_name ="";
    
}

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $post = Catagory::findOrfail($this->selectedItem);
        $post->delete();
        session()->flash('message', 'Category delete successfully');
        session()->flash('alert-class', 'alert-danger');
    }
    
}
