<?php

namespace App\Livewire\Admin;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Message;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'projectsCount' => Project::count(),
            'skillsCount' => Skill::count(),
            'messagesCount' => Message::count(),
            'totalViews' => 1250, // Static for now, can be implemented with analytics
        ]);
    }
}
