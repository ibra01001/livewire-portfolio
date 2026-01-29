<?php

namespace App\Livewire\Admin\Career\Experience;

use App\Models\Experience;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    use WithPagination;

    public function toggleActive($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->is_active = !$experience->is_active;
        $experience->save();
    }

    public function delete($id)
    {
        Experience::findOrFail($id)->delete();
        session()->flash('message', 'Experience deleted successfully!');
    }

    public function render()
    {
        return view('livewire.admin.career.experience.index', [
            'experiences' => Experience::orderBy('order')->paginate(10)
        ]);
    }
}
