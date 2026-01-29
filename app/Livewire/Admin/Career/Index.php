<?php

namespace App\Livewire\Admin\Career;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.career.index');
    }
}
