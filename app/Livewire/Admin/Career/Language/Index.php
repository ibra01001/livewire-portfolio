<?php

namespace App\Livewire\Admin\Career\Language;

use App\Models\Language;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    use WithPagination;

    public function toggleActive($id)
    {
        $language = Language::findOrFail($id);
        $language->is_active = !$language->is_active;
        $language->save();
    }

    public function delete($id)
    {
        Language::findOrFail($id)->delete();
        session()->flash('message', 'Language entry deleted successfully!');
    }

    public function render()
    {
        return view('livewire.admin.career.language.index', [
            'languages' => Language::orderBy('order')->paginate(10)
        ]);
    }
}
