<div class="bg-[#F5F3EF] min-h-screen relative overflow-hidden">
    <x-site-background />

    <div class="max-w-7xl mx-auto px-6 py-20 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 relative">
            <h2 class="text-5xl font-extrabold text-[#1A1A1A] mb-4 inline-block relative"
                style="font-family: 'Space Grotesk', sans-serif;">
                Let's Talk
                <!-- Hand-drawn squiggly underline -->
                <svg class="absolute w-full h-8 -bottom-6 left-0 text-[#FF6B55]" viewBox="0 0 200 20"
                    preserveAspectRatio="none">
                    <path d="M0 10 Q 25 20, 50 10 Q 75 0, 100 10 Q 125 20, 150 10 Q 175 0, 200 10" stroke="currentColor"
                        stroke-width="4" fill="none" stroke-linecap="round" />
                </svg>
            </h2>
            <p class="text-xl text-[#3D3D3D] max-w-2xl mx-auto mt-8 font-medium"
                style="font-family: 'Inter', sans-serif;">
                Got a project in mind? Let's build something awesome together.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Contact Form -->
            <div
                class="bg-white border-2 border-[#1A1A1A] p-8 rounded-lg shadow-[8px_8px_0px_0px_rgba(26,26,26,1)] relative z-10">
                <div
                    class="absolute -top-4 -left-4 w-12 h-12 bg-[#FF6B55] border-2 border-[#1A1A1A] rounded-full z-20 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-[#1A1A1A] mb-8 mt-2"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    Send a Message
                </h3>

                @if (session()->has('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('message') }}</span>
                    </div>
                @endif

                <form wire:submit.prevent="submit" class="space-y-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            Your Name
                        </label>
                        <input type="text" id="name" name="name" wire:model="name"
                            class="w-full px-4 py-3 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] text-[#1A1A1A] placeholder-gray-400 transition-colors duration-200 outline-none"
                            placeholder="John Doe" required>
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            Your Email
                        </label>
                        <input type="email" id="email" name="email" wire:model="email"
                            class="w-full px-4 py-3 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] text-[#1A1A1A] placeholder-gray-400 transition-colors duration-200 outline-none"
                            placeholder="john@example.com" required>
                        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message" class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            Your Message
                        </label>
                        <textarea id="message" name="message" wire:model="message" rows="5"
                            class="w-full px-4 py-3 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] text-[#1A1A1A] placeholder-gray-400 transition-colors duration-200 outline-none resize-none"
                            placeholder="Tell me about your project..." required></textarea>
                        @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full inline-flex items-center justify-center px-6 py-4 bg-[#FF6B55] border-2 border-[#1A1A1A] text-white font-bold text-lg rounded-md transition-all duration-200 shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[4px] hover:translate-y-[4px] focus:outline-none"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        Send Message
                        <svg class="w-5 h-5 ml-2 transform rotate-12" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Contact Info & Illustration -->
            <div class="space-y-10 relative">
                <!-- Decorative elements behind -->
                <div
                    class="absolute top-20 right-10 w-48 h-48 bg-[#1A1A1A] rounded-full opacity-5 pointer-events-none blur-3xl">
                </div>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div
                        class="bg-white border-2 border-[#1A1A1A] p-6 rounded-lg hover:-translate-y-1 transition-transform">
                        <div
                            class="w-10 h-10 bg-[#FF6B55] border-2 border-[#1A1A1A] rounded-full flex items-center justify-center mb-4 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">Email Me
                        </h4>
                        <p class="text-[#3D3D3D] text-sm mt-1">contact@example.com</p>
                    </div>

                    <div
                        class="bg-white border-2 border-[#1A1A1A] p-6 rounded-lg hover:-translate-y-1 transition-transform">
                        <div
                            class="w-10 h-10 bg-white border-2 border-[#1A1A1A] rounded-full flex items-center justify-center mb-4 text-[#1A1A1A]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">Location
                        </h4>
                        <p class="text-[#3D3D3D] text-sm mt-1">Available Worldwide</p>
                    </div>
                </div>

                <!-- Custom Illustrated-style Socials -->
                <div class="bg-[#1A1A1A] text-white p-8 rounded-lg border-2 border-[#1A1A1A] relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6" style="font-family: 'Space Grotesk', sans-serif;">Connect
                            Elsewhere</h3>
                        <div class="flex flex-wrap gap-4">
                            <a href="#"
                                class="px-4 py-2 border-2 border-white rounded-full hover:bg-white hover:text-[#1A1A1A] transition-colors font-medium">Twitter</a>
                            <a href="#"
                                class="px-4 py-2 border-2 border-white rounded-full hover:bg-white hover:text-[#1A1A1A] transition-colors font-medium">LinkedIn</a>
                            <a href="#"
                                class="px-4 py-2 border-2 border-white rounded-full hover:bg-white hover:text-[#1A1A1A] transition-colors font-medium">GitHub</a>
                        </div>
                    </div>
                    <!-- Decorative circles -->
                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-[#FF6B55] rounded-full opacity-20"></div>
                </div>

                <!-- Recent Messages (Admin) -->
                @if ($messages->isNotEmpty())
                    <div class="bg-white border-2 border-[#1A1A1A] rounded-lg p-6 mt-8">
                        <h3 class="text-xl font-bold text-[#1A1A1A] mb-4 border-b-2 border-[#1A1A1A] pb-2"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            Recent Inquiries
                        </h3>
                        <div class="space-y-4 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                            @foreach ($messages->take(3) as $msg)
                                <div
                                    class="p-3 bg-[#F5F3EF] border border-[#1A1A1A] rounded hover:border-[#FF6B55] transition-colors">
                                    <div class="flex justify-between items-start mb-1">
                                        <span class="font-bold text-[#1A1A1A] text-sm">{{ $msg->name }}</span>
                                        <span class="text-xs text-[#3D3D3D]">{{ $msg->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-xs text-[#3D3D3D] line-clamp-1">{{ $msg->message }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700;800&family=Inter:wght@400;500;700&display=swap"
        rel="stylesheet">
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #F5F3EF;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #1A1A1A;
            border-radius: 20px;
        }
    </style>
@endpush