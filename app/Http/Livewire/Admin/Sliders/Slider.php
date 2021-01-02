<?php

namespace App\Http\Livewire\Admin\Sliders;

use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        return view('livewire.admin.sliders.slider')->slot('main');
    }
}
