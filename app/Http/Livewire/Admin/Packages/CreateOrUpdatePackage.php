<?php

namespace App\Http\Livewire\Admin\Packages;

use App\Models\Package;
use Livewire\Component;

class CreateOrUpdatePackage extends Component
{
    public $package_id,$package_title,$status,$pricing,$recurring_period;

    public function render()
    {
        return view('livewire.admin.packages.create-or-update-package');
    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    private function resetInputFields(){
        $this->package_title = '';
        $this->status = '';
        $this->pricing = '';
        $this->recurring_period = '';
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function updateOrStorePackage()
    {
        $this->validate([
            'package_title' => 'required|string|max:255',
            'pricing' => 'required|max:100',
            'recurring_period' => 'required|max:255',
            'status' => 'boolean',
        ]);

        Package::updateOrCreate(['id' => $this->package_id], [
            'package_title' => $this->package_title,
            'pricing' => $this->pricing,
            'recurring_period' => $this->recurring_period,
            'status' => $this->status,
        ]);
        $this->emit('refreshPage');
        $this->emit('closeModalEvent');
        session()->flash('message', 
        $this->package_id ? 'package Updated Successfully.' : 'package Created Successfully.');
        session()->flash('alert-class', 'alert-success');
        return redirect()->to('admin/service/package');
        $this->resetInputFields();
    }

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $this->package_id = $id;
        $this->package_title = $package->package_title;
        $this->pricing = $package->pricing;
        $this->status = $package->status;
        $this->recurring_period = $package->recurring_period;
    }
}
