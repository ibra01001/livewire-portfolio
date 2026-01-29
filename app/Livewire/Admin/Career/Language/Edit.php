<?php

namespace App\Livewire\Admin\Career\Language;

use App\Models\Language;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

#[Layout('livewire.layout.admin')]
class Edit extends Component
{
    public Language $language;

    #[Validate('required|min:2')]
    public $name = '';

    #[Validate('boolean')]
    public $is_active = true;

    #[Validate('required|integer')]
    public $order = 0;

    public function mount(Language $language)
    {
        $this->language = $language;
        $this->name = $language->name;
        $this->is_active = $language->is_active;
        $this->order = $language->order;
    }

    public function save()
    {
        $this->validate();

        $this->language->update([
            'name' => $this->name,
            'is_active' => $this->is_active,
            'order' => $this->order,
        ]);

        session()->flash('message', 'Language entry updated successfully.');
        return redirect()->route('admin.career.language.index');
    }

    public function render()
    {
        return view('livewire.admin.career.language.edit');
    }
}
