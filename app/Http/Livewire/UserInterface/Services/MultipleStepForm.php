<?php

namespace App\Http\Livewire\UserInterface\Services;

use Livewire\Component;

class MultipleStepForm extends Component
{
    public $seo;
    public $google_add;
    public $web_design;
    public $all;
    public $price;
    public $message;
    public $step;
    public $customer;

    private $stepAction = [
        'submit1',
        'submit2',
        'submit3'
    ];

    public function mount(){
        $this->step =0;
    }

    public function increaseStep(){
        $this->step++;
    }

    public function decreaseStep(){
        $this->step--;
    }

    public function render()
    {
        return view('livewire.user-interface.services.multiple-step-form');
    }

    public function submit(){
       $action = $this->stepAction[$this->step];
       $this->$action();
    }
}
