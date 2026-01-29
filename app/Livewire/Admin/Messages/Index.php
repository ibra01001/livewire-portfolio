<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $message = Message::find($id);
        if ($message) {
            $message->delete();
        }
    }

    public function render()
    {
        return view('livewire.admin.messages.index', [
            'messages' => Message::latest()->paginate(10)
        ]);
    }
}
