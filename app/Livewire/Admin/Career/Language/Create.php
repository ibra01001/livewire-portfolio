<?php

namespace App\Livewire\Admin\Career\Language;

use App\Models\Language;
use App\Models\Profile;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

#[Layout('livewire.layout.admin')]
class Create extends Component
{
    #[Validate('required|min:2')]
    public $name = '';

    #[Validate('boolean')]
    public $is_active = true;

    #[Validate('required|integer')]
    public $order = 0;

    public function save()
    {
        $this->validate();

        $profile = Profile::first();

        Language::create([
            'profile_id' => $profile->id,
            'name' => $this->name,
            'is_active' => $this->is_active,
            'order' => $this->order,
        ]);

        session()->flash('message', 'Language created successfully.');
        return redirect()->route('admin.career.language.index');
    }

    public function render()
    {
        return view('livewire.admin.career.language.create');
    }
}
