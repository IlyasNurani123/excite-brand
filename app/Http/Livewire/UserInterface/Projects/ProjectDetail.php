<?php

namespace App\Http\Livewire\UserInterface\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectDetail extends Component
{
   
    public function render()
    {
        $portfolio =Project::limit(9)->get();
        return view('livewire.user-interface.projects.project-detail',compact('portfolio'));
    }
}
