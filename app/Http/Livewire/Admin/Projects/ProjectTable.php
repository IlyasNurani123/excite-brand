<?php

namespace App\Http\Livewire\Admin\Projects;

use Livewire\Component;

class ProjectTable extends Component
{
    public function render()
    {
        return view('livewire.admin.projects.project-table')->slot('main');
    }
}
