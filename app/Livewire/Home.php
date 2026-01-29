<?php

namespace App\Livewire;

use App\Models\Profile;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'profile' => Profile::firstOrNew(),
        ]);
    }
}
