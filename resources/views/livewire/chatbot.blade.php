<!-- AI Chat Section - Flat Brutalist Design -->
<section>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-3 mb-6">
                <div class="w-3 h-3 bg-[#FF6B55]"></div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-[#1A1A1A]" 
                    style="font-family: 'Space Grotesk', sans-serif;">
                    Chat with AI Assistant
                </h2>
                <div class="w-3 h-3 bg-[#FF6B55]"></div>
            </div>
            <p class="text-lg text-[#3D3D3D] max-w-2xl mx-auto">
                Got questions? Need help? Chat with my AI assistant for instant answers about my work, skills, and experience.
            </p>
        </div>

        <!-- Chat Container -->
        <div class="max-w-4xl mx-auto">
            <!-- Chat Box with Border Frame -->
            <div class="relative">
                <!-- Decorative frame elements -->
                <div class="absolute -top-4 -left-4 w-16 h-16 border-t-4 border-l-4 border-[#FF6B55] pointer-events-none"></div>
                <div class="absolute -bottom-4 -right-4 w-16 h-16 border-b-4 border-r-4 border-[#1A1A1A] pointer-events-none"></div>

                <!-- Main Chat Container -->
                <div class="bg-white border-4 border-[#1A1A1A] shadow-2xl">
                    
                    <!-- Chat Header -->
                    <div class="bg-[#FF6B55] px-6 py-5 border-b-4 border-[#1A1A1A]">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-[#1A1A1A] flex items-center justify-center border-2 border-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-white" style="font-family: 'Space Grotesk', sans-serif;">
                                        AI Assistant
                                    </h3>
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-white"></div>
                                        <p class="text-sm text-white">Online</p>
                                    </div>
                                </div>
                            </div>
                            
                            <button 
                                wire:click="clearChat"
                                class="p-3 bg-[#1A1A1A] hover:bg-white border-2 border-white hover:border-[#1A1A1A] text-white hover:text-[#1A1A1A] transition-all transform hover:-translate-y-1"
                                title="Clear chat"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Messages Area -->
                    <div 
                        class="h-[500px] overflow-y-auto p-6 space-y-6 bg-[#F5F3EF]"
                        id="messages-container"
                        wire:poll.3s
                    >
                        @forelse($conversation as $msg)
                            <div class="flex {{ $msg['role'] === 'user' ? 'justify-end' : 'justify-start' }} animate-fade-in">
                                <div class="flex gap-3 max-w-[75%] {{ $msg['role'] === 'user' ? 'flex-row-reverse' : 'flex-row' }}">
                                    
                                    <!-- Avatar -->
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 {{ $msg['role'] === 'user' ? 'bg-[#1A1A1A]' : 'bg-[#FF6B55]' }} border-2 border-[#1A1A1A] flex items-center justify-center font-bold text-white"
                                             style="font-family: 'Space Grotesk', sans-serif;">
                                            {{ $msg['role'] === 'user' ? 'U' : 'AI' }}
                                        </div>
                                    </div>
                                    
                                    <!-- Message Bubble -->
                                    <div class="flex flex-col {{ $msg['role'] === 'user' ? 'items-end' : 'items-start' }}">
                                        <div class="px-5 py-3 border-2 border-[#1A1A1A] {{ $msg['role'] === 'user' ? 'bg-[#1A1A1A] text-white' : 'bg-white text-[#1A1A1A]' }} transform transition-transform hover:-translate-y-1 hover:shadow-lg">
                                            <p class="text-sm leading-relaxed whitespace-pre-wrap break-words" 
                                               style="font-family: 'Inter', sans-serif;">
                                                {{ $msg['content'] }}
                                            </p>
                                        </div>
                                        <span class="text-xs text-[#3D3D3D] mt-2 px-1" style="font-family: 'Inter', sans-serif;">
                                            {{ $msg['timestamp'] }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <!-- Welcome Message -->
                            <div class="text-center py-12">
                                <div class="inline-block p-8 bg-white border-4 border-[#1A1A1A] transform hover:-translate-y-1 hover:rotate-[-1deg] transition-all">
                                    <div class="w-20 h-20 bg-[#FF6B55] border-4 border-[#1A1A1A] mx-auto mb-4 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-extrabold text-[#1A1A1A] mb-3" style="font-family: 'Space Grotesk', sans-serif;">
                                        Hey there! 👋
                                    </h3>
                                    <p class="text-[#3D3D3D] text-lg" style="font-family: 'Inter', sans-serif;">
                                        Ask me anything about my projects,<br>skills, or experience!
                                    </p>
                                </div>
                            </div>
                        @endforelse

                        <!-- Loading Indicator -->
                        @if($loading)
                            <div class="flex justify-start animate-fade-in">
                                <div class="flex gap-3 max-w-[75%]">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-[#FF6B55] border-2 border-[#1A1A1A] flex items-center justify-center font-bold text-white"
                                             style="font-family: 'Space Grotesk', sans-serif;">
                                            AI
                                        </div>
                                    </div>
                                    <div class="px-5 py-4 bg-white border-2 border-[#1A1A1A]">
                                        <div class="flex gap-2">
                                            <div class="w-3 h-3 bg-[#FF6B55] animate-bounce"></div>
                                            <div class="w-3 h-3 bg-[#1A1A1A] animate-bounce" style="animation-delay: 0.1s"></div>
                                            <div class="w-3 h-3 bg-[#FF6B55] animate-bounce" style="animation-delay: 0.2s"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Input Area -->
                    <form wire:submit.prevent="send" class="p-6 bg-white border-t-4 border-[#1A1A1A]">
                        <div class="flex gap-3">
                            <input 
                                type="text" 
                                wire:model="message"
                                placeholder="Type your message here..."
                                class="flex-1 px-5 py-4 border-2 border-[#1A1A1A] focus:outline-none focus:border-[#FF6B55] transition-all text-[#1A1A1A] placeholder-[#3D3D3D]/50 bg-[#F5F3EF]"
                                style="font-family: 'Inter', sans-serif;"
                                autocomplete="off"
                                {{ $loading ? 'disabled' : '' }}
                            >
                            <button 
                                type="submit"
                                class="px-8 py-4 bg-[#FF6B55] hover:bg-[#1A1A1A] border-2 border-[#1A1A1A] text-white font-bold transition-all transform hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none"
                                style="font-family: 'Space Grotesk', sans-serif;"
                                {{ $loading ? 'disabled' : '' }}
                            >
                                <div class="flex items-center gap-2">
                                    <span>SEND</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                </div>
                            </button>
                        </div>

                        <!-- Quick Suggestions -->
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="text-xs text-[#3D3D3D] font-bold uppercase tracking-wider" style="font-family: 'Space Grotesk', sans-serif;">
                                Quick Start →
                            </span>
                            @foreach(['What are your skills?', 'Tell me about your projects', 'How can I contact you?'] as $suggestion)
                                <button 
                                    type="button"
                                    wire:click="$set('message', '{{ $suggestion }}')"
                                    class="px-3 py-1.5 text-xs bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] hover:bg-[#FF6B55] hover:text-white font-medium transition-all transform hover:-translate-y-0.5"
                                    style="font-family: 'Inter', sans-serif;"
                                    {{ $loading ? 'disabled' : '' }}
                                >
                                    {{ $suggestion }}
                                </button>
                            @endforeach
                        </div>
                    </form>

                </div>

                <!-- Floating decorative elements -->
                <div class="absolute -top-8 -right-8 w-12 h-12 bg-[#FF6B55] border-2 border-[#1A1A1A] pointer-events-none hidden lg:block" 
                     style="animation: bounce 2s infinite;"></div>
                <div class="absolute top-1/2 -left-12 w-8 h-8 bg-white border-2 border-[#1A1A1A] transform rotate-45 pointer-events-none hidden lg:block" 
                     style="animation: bounce 2s infinite 0.5s;"></div>
            </div>
        </div>

        <!-- Decorative Background Elements -->
        <div class="absolute top-20 right-10 w-48 h-48 border-4 border-[#FF6B55] opacity-10 pointer-events-none hidden lg:block"></div>
        <div class="absolute bottom-20 left-10 w-32 h-32 bg-[#FF6B55] opacity-10 pointer-events-none hidden lg:block"></div>
    </div>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.hook('message.processed', (message, component) => {
                const container = document.getElementById('messages-container');
                if (container) {
                    container.scrollTo({
                        top: container.scrollHeight,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Custom scrollbar styling */
        #messages-container::-webkit-scrollbar {
            width: 8px;
        }

        #messages-container::-webkit-scrollbar-track {
            background: #F5F3EF;
            border-left: 2px solid #1A1A1A;
        }

        #messages-container::-webkit-scrollbar-thumb {
            background: #FF6B55;
            border: 2px solid #1A1A1A;
        }

        #messages-container::-webkit-scrollbar-thumb:hover {
            background: #1A1A1A;
        }
    </style>
</section>