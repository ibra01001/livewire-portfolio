<?php

namespace App\Livewire\Admin\Career\Education;

use App\Models\Education;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    use WithPagination;

    public function toggleActive($id)
    {
        $education = Education::findOrFail($id);
        $education->is_active = !$education->is_active;
        $education->save();
    }

    public function delete($id)
    {
        Education::findOrFail($id)->delete();
        session()->flash('message', 'Education deleted successfully!');
    }

    public function render()
    {
        return view('livewire.admin.career.education.index', [
            'educations' => Education::orderBy('order')->paginate(10)
        ]);
    }
}
