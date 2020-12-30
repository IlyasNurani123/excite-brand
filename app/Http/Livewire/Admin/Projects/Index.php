<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public $project_id,$project_name,
            $project_description,
            $project_type,
            $url,$project_image;
   
    public function render()
    {
        return view('livewire.admin.projects.index')->slot('main');
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->project_title = '';
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
            'project_title' => 'required | string',
            'project_type' => 'required | string',
            'url' => 'nullable| string',
            'project_description' => 'nullable',
            'project_image' => 'nullable |image'
        ]);
        $project_image= $this->project_image->store("images.portfolio", "public");
        Project::updateOrCreate(['id' => $this->$project_id], [
            'project_title' => $this->project_title,
            'project_type' => $this->project_type,
            'url' => $this->url,
            'project_description' => $this->project_description,
            'project_image' => $project_image ,
        ]);
        $this->emit('projectStore');
        session()->flash('message', 
            $this->student_id ? 'Portfolio Updated Successfully.' : 'Portfolio Created Successfully.');
  
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
        $this->project_type = $project->project_type;
        $this->url = $project->url;
        $this->project_description = $project->project_description;
        $this->project_image = $project->project_image;
    
    }
}
