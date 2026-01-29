<?php

namespace App\Livewire\Admin\Career\Certification;

use App\Models\Certification;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    use WithPagination;

    public function toggleActive($id)
    {
        $certification = Certification::findOrFail($id);
        $certification->is_active = !$certification->is_active;
        $certification->save();
    }

    public function delete($id)
    {
        Certification::findOrFail($id)->delete();
        session()->flash('message', 'Certification deleted successfully!');
    }

    public function render()
    {
        return view('livewire.admin.career.certification.index', [
            'certifications' => Certification::orderBy('order')->paginate(10)
        ]);
    }
}
