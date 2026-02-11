<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\GeminiChatService;

class Chatbot extends Component
{
    public string $message = '';
    public array $conversation = [];
    public bool $loading = false;
    public bool $isOpen = false;

    public function mount()
    {
        // Initialize with Ibrahim's welcome message
        $this->conversation = [
            [
                'role' => 'assistant',
                'content' => '👋 Hey there! I\'m Ibrahim Remili (well, the AI version of me). I\'m a Full Stack Developer building web applications. Feel free to ask me about my projects, skills, or experience!',
                'timestamp' => now()->format('H:i')
            ]
        ];
    }

    public function send(GeminiChatService $chat)
    {
        if (trim($this->message) === '') {
            return;
        }

        // Add user message to conversation
        $this->conversation[] = [
            'role' => 'user',
            'content' => $this->message,
            'timestamp' => now()->format('H:i')
        ];

        $userMessage = $this->message;
        $this->message = '';
        $this->loading = true;

        // Get AI reply as Ibrahim
        $reply = $chat->replyAsIbrahim($userMessage);

        // Add AI reply to conversation
        $this->conversation[] = [
            'role' => 'assistant',
            'content' => $reply,
            'timestamp' => now()->format('H:i')
        ];

        $this->loading = false;
    }

    public function toggleChat()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function clearChat()
    {
        $this->conversation = [
            [
                'role' => 'assistant',
                'content' => '👋 Hey again!',
                'timestamp' => now()->format('H:i')
            ]
        ];
    }

    public function render()
    {
        return view('livewire.chatbot');
    }
}