<?php

namespace App\Http\Livewire\Admin\Features;

use App\Models\Feature;
use App\Models\Service;
use Livewire\Component;

class AddFeature extends Component
{
    public $feature_id,$feature_title,$status,$unit_price,$service_id;

    protected $listeners = [
        'onEdit'=> 'edit',
        'onDelette' => 'deleteFeature'
    ];

    public function render()
    {
        return view('livewire.admin.features.add-feature',
        [ 'services' => Service::get(['id','title'])] );
    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    private function resetInputFields(){
        $this->feature_title = '';
        $this->status = '';
        $this->unit_price = '';
        $this->service_id = '';
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function updateOrStore()
    {
        $this->validate([
            'feature_title' => 'required|string|max:255',
            'unit_price' => 'required|max:100',
            'service_id' => 'required|max:255',
            'status' => 'boolean',
        ]);

        Feature::updateOrCreate(['id' => $this->feature_id], [
            'feature_title' => $this->feature_title,
            'unit_price' => $this->unit_price,
            'service_id' => $this->service_id,
            'status' => $this->status,
        ]);
        $this->emit('refreshPage');
        session()->flash('message', 
        $this->feature_id ? 'Feature Updated Successfully.' : 'Feature Created Successfully.');
        session()->flash('alert-class', 'alert-success');
        return redirect()->to('admin/service/feature');
        $this->resetInputFields();
    }

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        $this->feature_id = $id;
        $this->feature_title = $feature->feature_title;
        $this->unit_price = $feature->unit_price;
        $this->status = $feature->status;
        $this->service_id = $feature->service_id;
    }
    
 
}
