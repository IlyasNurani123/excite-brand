<?php

namespace App\Http\Livewire\UserInterface\Projects;

use App\Models\Project;
use Livewire\Component;

class PortfolioDetail extends Component
{
    public function render()
    {
        $portfolio =Project::latest()->get();
        return view('livewire.user-interface.projects.portfolio-detail',compact('portfolio'))->layout('layouts.guest');
    }
}
