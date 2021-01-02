<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $project_id,$project_name,
            $project_description,
            $project_type,
            $url,$project_image;
   
    public function render()
    {
        return view('livewire.admin.projects.index',[
            'portfolios'=> Project::all(),
        ])->slot('main');
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->project_name = '';
        $this->project_description = '';
        $this->project_type = '';
        $this->url = '';
        $this->project_image = '';
    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {

        $this->validate([
            'project_name' => 'required|string|max:255',
            'project_type' => 'required|string|max:100',
            'url' => 'nullable|string|max:255',
            'project_description' => 'nullable',
            'project_image' => 'nullable|image'
        ]);

        $project_img="";
        if($this->project_image != ''){
            $project_img= $this->project_image->store("images.portfolio", "public");
        }
        Project::updateOrCreate(['id' => $this->project_id], [
            'project_name' => $this->project_name,
            'project_type' => $this->project_type,
            'url' => $this->url,
            'project_description' => $this->project_description,
            'project_image' => $project_img,
        ]);
        $this->emit('projectStore');
        session()->flash('message', 
            $this->project_id ? 'Portfolio Updated Successfully.' : 'Portfolio Created Successfully.');
  
        $this->resetInputFields();
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $this->project_id = $id;
        $this->project_name = $project->project_name;
        $this->project_type = $project->project_type;
        $this->url = $project->url;
        $this->project_description = $project->project_description;
        $this->project_image = $project->project_image;
    
    }

    public function delete($id){
        $project = Project::findOrfail($id);
        $project->delete();
        session()->flash('message', 'project delete successfully');
    }
}
