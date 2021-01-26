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
    public $iteration;
    public $selectedItem;
    protected $listeners = [
        "delete" => "onDelete",
];

    public function render()
    {
        return view('livewire.admin.banner',[
            'banners'=>Banner::all(),
        ]);
    }


    public function mount(){
       
        if(!empty($this->selectedItem)){

            $banner = Banner::findOrFail($id);
            $this->image = $banner->image;
            $this->banner_name = $banner->banner_name;
            $this->status = $banner->status;
           

        }
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
        if(!empty($banner_id)){
            // Storage::delete('storage/'.$this->icon);
            $banner = Banner::findOrfail($this->selectedItem);
            unlink('storage/'.$banner->image);
            $banner= $this->image->store("images/", "public");
        }else{
            $banner= $this->image->store("images/", "public");
        }
        Banner::updateOrCreate(['id' => $this->banner_id], [
            'image' => $banner,
            'banner_name' => $this->banner_name,
            'status' => $this->status,
        ]);
        $this->emit('closeModelEvent');
        session()->flash('message', 
        $this->banner_id ? 'banner Updated Successfully.' : 'Log Created Successfully.');
        session()->flash('alert-class', 'alert-success');
        return redirect()->to('admin/banner');
        $this->iteration++;
        $this->resetInputFields();
    }

    //  /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    public function edit($id)
    {
        dd($id);
        $banner = Banner::findOrFail($id);
        $this->image = $banner->image;
        $this->banner_name = $banner->banner_name;
        $this->status = $banner->status;
    }


    public function selectItems($itemId,$action){
        $this->action = $action;
        $this->selectedItem = $itemId;
   }

   public function updateStatus($id, $status){
       $banner = Banner::findOrfail($id);
       $s = $status === 1? 0: 1;
       $status1= $banner->update([
           'status' => $s
       ]);
   }

    public function onDelete(){

        $banner = Banner::findOrfail($this->selectedItem);
        $banner->delete('storage/'.$banner->image);
        $banner->delete();
        session()->flash('message', 'banner images delete successfully');
        session()->flash('alert-class', 'alert-danger'); 
    }
}
