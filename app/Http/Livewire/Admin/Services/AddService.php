<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AddService extends Component
{
    use WithFileUploads;
    // public Service $service;

    public  $service,$title,$description,$icon,$service_id;

    public function mount(Service $service){

        $this->service = null;
       
        if($service){

            // $this->service= $service;
            $this->service_id= $service->id;
            $this->title= $service->title;
            $this->description= $service->description;
            $this->icon= $service->icon;
        }

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        return view('livewire.admin.services.add-service');
    }
    
    /**
     * Validatiion 
     * 
     * @var array[]
     */
    protected $rules = [
        'title' => 'required',
        'description' => 'required|min:10',
        'icon' => 'nullable|image|mimes:png,jpg,jpeg|max:1024'
    ];

    /**
     * Resest All input fields 
     * 
     * @var array[]
     */
    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->icon = '';
    }
      
    /**
     * Add services 
     * 
     *  @param title,description,icon 
     */
    public function addAndUpdateService(){

        $this->validate();

        if($this->service_id){
            $updateData=Service::findOrfail($this->service_id);
            if($this->icon !== ''){
                Storage::delete(asset('storage/'.$this->icon));
            }
            $icon= $this->icon->store("images/icon", "public");
            $updateData->update([
                'title' => $this->title,
                'description' => $this->description,
                'icon' => $icon
            ]);
        }
        else{
            $icon= $this->icon->store("images", "public");
            Service::create([
                'title' => $this->title,
                'description' => $this->description,
                'icon' => $icon
            ]);
        }
        
       $this-> resetInputFields();
       session()->flash('message', 
            $this->service_id ? 'Service Updated Successfully.' : 'Service Created Successfully.');
     return redirect()->to('admin/service');
    }
}
