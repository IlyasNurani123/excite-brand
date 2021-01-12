<?php

namespace App\Http\Livewire\Admin\Sliders;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class AddSlider extends Component
{
    use WithFileUploads;
    public $slider_id,$slider_title,
            $heading,$description,
            $button_text,$status;
    public $images = [];


    public function render()
    {
        return view('livewire.admin.sliders.add-slider');
    }

     /**
     * Resest All input fields 
     * 
     * @var array[]
     */
    private function resetInputFields(){
        $this->slider_title = '';
        $this->description = '';
        $this->status = '';
        $this->heading = '';
        $this->button_text = '';
        $this->images = null;

    }
    /**
     * Validatiion 
     * 
     * @var array[]
     */
    protected $rules = [
        'slider_title' => 'required|string',
        'heading' => 'required|string',
        'description' => 'required|string',
        'button_text' => 'required|string',
        'images.*' =>'image|max:1024'
    ];

    public function UpdateOrAddSlider(){

        $this->validate();
        DB::beginTransaction();
        try{
           
            $slider=Slider::updateOrCreate(['id' => $this->slider_id], [
                'slider_tilte' => $this->slider_title,
                'heading' => $this->heading,
                'description' => $this->description,
                'button_text' => $this->button_text,
                'status' => $this->status
            ]);
            if(!empty($this->images)){

            foreach ($this->images as $key => $image) {
                    $this->images[$key] = $image->store('images/slider','public');
                    }
                $this->images = json_encode($this->images);
                $slider->images()->create([
                    "image_url" => $this->images,
                    "imageable_id" =>$slider->id
                ]);
            }

            $this-> resetInputFields();
            session()->flash('message', 
                 $this->slider_id ? 'slider Updated Successfully.' : 'slider Created Successfully.');
             session()->flash('alert-class', 'alert-success');

            DB::commit();

        }catch(\Exception $e){
            DB::rollBack();
            session()->flash('message', $e->getMessage());
            session()->flash('alert-class', 'alert-danger');
        }

    }
}