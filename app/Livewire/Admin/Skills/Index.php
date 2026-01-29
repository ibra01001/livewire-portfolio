<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $skill = Skill::find($id);
        if ($skill) {
            $skill->delete();
        }
    }

    public function render()
    {
        return view('livewire.admin.skills.index', [
            'skills' => Skill::paginate(10)
        ]);
    }
}
