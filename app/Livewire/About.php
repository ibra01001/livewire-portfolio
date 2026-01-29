<?php

namespace App\Livewire;

use App\Models\Skill;
use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class About extends Component
{
    public function render()
    {
        return view('livewire.about', [
            'skills' => Skill::all(),
            'projects' => Project::all(),
        ]);
    }
}
