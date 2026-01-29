<?php

namespace App\Livewire\Admin\Career\Education;

use App\Models\Education;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

#[Layout('livewire.layout.admin')]
class Edit extends Component
{
    public Education $education;

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

    public function mount(Education $education)
    {
        $this->education = $education;
        $this->degree = $education->degree;
        $this->institution = $education->institution;
        $this->start_date = $education->start_date?->format('Y-m');
        $this->end_date = $education->end_date?->format('Y-m');
        $this->description = $education->description;
        $this->is_active = $education->is_active;
        $this->order = $education->order;
    }

    public function save()
    {
        $this->validate();

        $this->education->update([
            'degree' => $this->degree,
            'institution' => $this->institution,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'order' => $this->order,
        ]);

        session()->flash('message', 'Education entry updated successfully.');
        return redirect()->route('admin.career.education.index');
    }

    public function render()
    {
        return view('livewire.admin.career.education.edit');
    }
}
