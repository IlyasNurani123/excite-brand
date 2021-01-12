<?php

namespace App\Http\Livewire\Admin\Testimonials;

use Livewire\Component;
use App\Models\FeedBack;

class AddTestimonial extends Component
{
    public $name;
    public $testimonial;
    public $link;
    public $feedback_id;


    public function render()
    {
        return view('livewire.admin.testimonials.add-testimonial');
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    private function resetInputFields(){
        $this->name = '';
        $this->link = '';
        $this->testimonial = '';
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function updateOrStoreTestimonial()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'testimonial' => 'required',
            'link' => 'string|required',
        ]);

        FeedBack::updateOrCreate(['id' => $this->feedback_id], [
            'name' => $this->name,
            'review' => $this->testimonial,
            'link' => $this->link,
        ]);
        session()->flash('message', 
        $this->feedback_id ? 'Testimonial Updated Successfully.' : 'Testimonial Created Successfully.');
        session()->flash('alert-class', 'alert-success');
        return redirect()->to('admin/testimonial');
        $this->resetInputFields();
    }

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $feed_back = FeedBack::findOrFail($id);
        $this->feedback_id = $id;
        $this->name = $feed_back->name;
        $this->testimonial = $feed_back->testimonial;
        $this->link = $feed_back->link;
    }
    
}
