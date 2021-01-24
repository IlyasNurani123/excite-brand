<?php

namespace App\Http\Livewire\UserInterface\Services;

use Livewire\Component;
use App\Models\SeoServiceForm;

class MultipleStepForm extends Component
{
    public $seo;
    public $google_add;
    public $web_design;
    public $selectAll;
    public $price;
    public $name;
    public $email;
    public $contact_no;
    public $website_url;
    public $step;

    public $customer;


    private $stepAction = [
        'submit1',
        'submit2',
        'submit3'
    ];

    public function mount(){
        $this->step = 0;
        $this->seo = false;
        $this->google_add = false;
        $this->web_design = false;
        $this->selectAll = false;
    }

    public function checkAll(){
        
        $this->selectAll= true;
        $this->seo = true;
        $this->google_add = true;
        $this->web_design = true;
       
    }

   
    public function increaseStep(){
       
            if($this->google_add  || $this->seo || $this->web_design ){
                $this->step++;
            }else{
                session()->flash('message', 'please select any service');
            }
    }

    public function increaseStep1(){
        if($this->price !== null ){
            $this->step++;
        }else{
            session()->flash('message', 'please select price');
        }
         }

    public function decreaseStep(){
        $this->step--;
    }

    public function render()
    {

        return view('livewire.user-interface.services.multiple-step-form');
    }

    public function submit(){
        $this->validate([
                    'name' => 'required',
                    'email' => 'required | email',
                    'contact_no' => 'required',
                ]);

       $quote= SeoServiceForm::create([
            'google_ads_service'=> $this->google_add,
            'seo_service' =>$this->seo,
            'web_design_service' => $this->web_design,
            "price" => $this->price,
            'name' => $this->name,
            'email' => $this->email,
            'contact_no' => $this->contact_no,
            'website_url' =>$this->website_url
            ]);

            session()->flash('message', 'You quote submit Successful');
    }
}
