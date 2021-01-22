<?php

namespace App\Http\Livewire\Admin\Logos;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Logo;

class CreateLogo extends Component
{
    use WithFileUploads;
    public $logo_id;
    public $logo_url;
    public $status;
    public  $iteration;
    public function render()
    {
        return view('livewire.admin.logos.create-logo');
    }

    protected $listeners = [
        'onEdit'=> 'edit',
    ];

    
      /**
     * Validatiion 
     * 
     * @var array[]
     */
    protected $rules = [
        'logo_url' => 'required|image',
        'status' => 'nullable',
    ];

    /**
     * Resest All input fields 
     * 
     * @var array[]
     */
    private function resetInputFields(){
        $this->logo_url = '';
        $this->status = '';
    }

    public function updateOrcreateLogo()
    {
        $this->validate();
        if(!empty($logo_id)){
            // Storage::delete('storage/'.$this->icon);
            $logo= $this->logo_url->store("images/logos", "public");
        }else{
            $logo= $this->logo_url->store("images/logos", "public");
        }
        Logo::updateOrCreate(['id' => $this->logo_id], [
            'logo_url' => $logo,
            'status' => $this->status,
        ]);
        $this->emit('closeModelEvent');
        session()->flash('message', 
        $this->logo_id ? 'Logo Updated Successfully.' : 'Log Created Successfully.');
        session()->flash('alert-class', 'alert-success');
        // return redirect()->to('admin/logo/feature');
        $this->iteration++;
        $this->resetInputFields();
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        $this->logo_url = $logo->logo_url;
        $this->status = $logo->status;
    }
}
