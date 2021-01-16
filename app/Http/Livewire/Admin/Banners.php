<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Banners extends Component
{
    use WithFileUploads;
    public $banner_id;
    public $banner_name;
    public $image;
    public $status;
    public $action;
    public $selectedItem;
    protected $listeners = ["delete" => "onDelete"];

    public function render()
    {
        return view('livewire.admin.banner',[
            'banners'=>Banner::all(),
        ]);
    }

     /**
     * Validatiion 
     * 
     * @var array[]
     */
    protected $rules = [
        'image' => 'required|image',
        'banner_name' =>'required',
        'status' => 'nullable',
    ];

     /**
     * Resest All input fields 
     * 
     * @var array[]
     */
    private function resetInputFields(){
        $this->image = '';
        $this->banner_name ='';
        $this->status = '';
    }

    public function updateOrcreatebanner()
    {
        $this->validate();
        if(!empty($image_id)){
            // Storage::delete('storage/'.$this->icon);
            $banner= $this->image->store("images/banner", "public");
        }else{
            $banner= $this->image->store("images/banners", "public");
        }
        Banner::updateOrCreate(['id' => $this->banner_id], [
            'image' => $this->image,
            'banner_name' => $this->banner_name,
            'status' => $this->status,
        ]);
        $this->emit('closeModelEvent');
        session()->flash('message', 
        $this->banner_id ? 'banner Updated Successfully.' : 'Log Created Successfully.');
        session()->flash('alert-class', 'alert-success');
        // return redirect()->to('admin/banner/feature');
        $this->resetInputFields();
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        $this->banner_url = $banner->banner_url;
        $this->status = $banner->status;
    }

    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }
    public function onDelete(){
        $service = Service::findOrfail($this->selectedItem);
        Storage::delete('storage/'.$service->project_image);
        $service->delete();
        session()->flash('message', 'service delete successfully');
        session()->flash('alert-class', 'alert-danger'); 
    }
}
