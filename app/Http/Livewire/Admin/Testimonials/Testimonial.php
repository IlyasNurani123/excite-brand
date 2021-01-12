<?php

namespace App\Http\Livewire\Admin\Testimonials;

use Livewire\Component;

class Testimonial extends Component
{
    public function render()
    {
        return view('livewire.admin.testimonials.testimonial',
    ['testimonials'=> FeedBack::get()]);
    }
}
