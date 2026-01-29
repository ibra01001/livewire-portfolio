<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);

        session()->flash('message', 'Message sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact', [
            'messages' => Message::latest()->get(),
        ]);
    }
}
