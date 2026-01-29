<?php

namespace App\Livewire;

use App\Models\Profile;
use Livewire\Component;

class Career extends Component
{
    public function render()
    {
        $profile = Profile::with([
            'experiences' => fn($q) => $q->where('is_active', true)->orderBy('order'),
            'educations' => fn($q) => $q->where('is_active', true)->orderBy('order'),
            'certifications' => fn($q) => $q->where('is_active', true)->orderBy('order'),
            'languages' => fn($q) => $q->where('is_active', true)->orderBy('order'),
        ])->first();

        return view('livewire.career', [
            'profile' => $profile
        ]);
    }
}
