<?php

namespace App\Livewire\Admin\Career\Education;

use App\Models\Education;
use App\Models\Profile;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

#[Layout('livewire.layout.admin')]
class Create extends Component
{
    #[Validate('required|min:2')]
    public $degree = '';

    #[Validate('required|min:2')]
    public $institution = '';

    #[Validate('nullable|date')]
    public $start_date;

    #[Validate('nullable|date|after_or_equal:start_date')]
    public $end_date;

    #[Validate('nullable|string')]
    public $description = '';

    #[Validate('boolean')]
    public $is_active = true;

    #[Validate('required|integer')]
    public $order = 0;

    public function save()
    {
        $this->validate();

        $profile = Profile::first();

        Education::create([
            'profile_id' => $profile->id,
            'degree' => $this->degree,
            'institution' => $this->institution,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'order' => $this->order,
        ]);

        session()->flash('message', 'Education entry created successfully.');
        return redirect()->route('admin.career.education.index');
    }

    public function render()
    {
        return view('livewire.admin.career.education.create');
    }
}
