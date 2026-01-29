<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class Projects extends Component
{
    public $project;

    public function mount(Project $project = null)
    {
        if ($project == true) {
            $this->project = $project;
        }
    }

    public function render()
    {
        if ($this->project) {
            return view('livewire.show', [
                'project' => $this->project
            ]);
        }

        $groupedProjects = Project::latest()
            ->get()
            ->groupBy('category');

        return view('livewire.projects', [
            'groupedProjects' => $groupedProjects,
        ]);
    }
}
