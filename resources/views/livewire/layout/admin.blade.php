<x-app-layout>
    <div class="flex min-h-screen bg-[#F5F3EF]" x-data="{ sidebarOpen: false }">
        <!-- Dotted Background Pattern -->
        <div class="fixed inset-0 pointer-events-none"
            style="background-image: radial-gradient(circle, #1A1A1A 1px, transparent 1px); background-size: 24px 24px; opacity: 0.03;">
        </div>

        {{-- Mobile Sidebar Toggle --}}
        <div class="lg:hidden fixed z-50 top-4 left-4">
            <button @click="sidebarOpen = !sidebarOpen"
                class="p-2 rounded-md bg-[#1A1A1A] text-white focus:outline-none shadow-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        {{-- Sidebar --}}
        <aside :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}"
            class="fixed inset-y-0 left-0 z-40 w-64 bg-white border-r-2 border-[#1A1A1A] text-[#1A1A1A] transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0 shadow-xl lg:shadow-none flex flex-col">
            <div class="flex items-center justify-between p-6 border-b-2 border-[#1A1A1A] bg-[#F5F3EF]">
                <h2 class="font-extrabold text-xl tracking-wider" style="font-family: 'Space Grotesk', sans-serif;">
                    ADMIN PANEL
                </h2>
                <button @click="sidebarOpen = false" class="lg:hidden text-[#1A1A1A] hover:text-[#FF6B55]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-3 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-3 rounded-lg border-2 transition-all duration-200 font-bold group
                    {{ request()->routeIs('admin.dashboard')
    ? 'bg-[#FF6B55] border-[#1A1A1A] text-white shadow-[4px_4px_0px_0px_#1A1A1A] translate-x-[-2px] translate-y-[-2px]'
    : 'bg-white border-transparent hover:border-[#1A1A1A] text-[#1A1A1A] hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[-2px] hover:translate-y-[-2px]' }}"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    Dashboard
                </a>

                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-black text-[#1A1A1A] uppercase tracking-wider relative inline-block">
                        Content
                        <span class="absolute bottom-0 left-4 right-0 h-1 bg-[#FF6B55] opacity-30 -skew-x-12"></span>
                    </p>
                </div>

                <a href="{{ route('admin.projects.index') }}"
                    class="flex items-center px-4 py-3 rounded-lg border-2 transition-all duration-200 font-bold
                    {{ request()->routeIs('admin.projects.*')
    ? 'bg-[#FF6B55] border-[#1A1A1A] text-white shadow-[4px_4px_0px_0px_#1A1A1A] translate-x-[-2px] translate-y-[-2px]'
    : 'bg-white border-transparent hover:border-[#1A1A1A] text-[#1A1A1A] hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[-2px] hover:translate-y-[-2px]' }}"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    Projects
                </a>

                <a href="{{ route('admin.skills.index') }}"
                    class="flex items-center px-4 py-3 rounded-lg border-2 transition-all duration-200 font-bold
                    {{ request()->routeIs('admin.skills.*')
    ? 'bg-[#FF6B55] border-[#1A1A1A] text-white shadow-[4px_4px_0px_0px_#1A1A1A] translate-x-[-2px] translate-y-[-2px]'
    : 'bg-white border-transparent hover:border-[#1A1A1A] text-[#1A1A1A] hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[-2px] hover:translate-y-[-2px]' }}"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Skills
                </a>

                <div class="pt-4 pb-2">
                    <p class="px-4 text-xs font-black text-[#1A1A1A] uppercase tracking-wider relative inline-block">
                        Management
                        <span class="absolute bottom-0 left-4 right-0 h-1 bg-[#FF6B55] opacity-30 -skew-x-12"></span>
                    </p>
                </div>

                <a href="{{ route('admin.profile.edit') }}"
                    class="flex items-center px-4 py-3 rounded-lg border-2 transition-all duration-200 font-bold
                    {{ request()->routeIs('admin.profile.*')
    ? 'bg-[#FF6B55] border-[#1A1A1A] text-white shadow-[4px_4px_0px_0px_#1A1A1A] translate-x-[-2px] translate-y-[-2px]'
    : 'bg-white border-transparent hover:border-[#1A1A1A] text-[#1A1A1A] hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[-2px] hover:translate-y-[-2px]' }}"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Profile
                </a>

                <a href="{{ route('admin.messages.index') }}"
                    class="flex items-center px-4 py-3 rounded-lg border-2 transition-all duration-200 font-bold
                    {{ request()->routeIs('admin.messages.*')
    ? 'bg-[#FF6B55] border-[#1A1A1A] text-white shadow-[4px_4px_0px_0px_#1A1A1A] translate-x-[-2px] translate-y-[-2px]'
    : 'bg-white border-transparent hover:border-[#1A1A1A] text-[#1A1A1A] hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[-2px] hover:translate-y-[-2px]' }}"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    Messages
                </a>
                <a href="{{ route('admin.career.index') }}"
                    class="flex items-center px-4 py-3 rounded-lg border-2 transition-all duration-200 font-bold
                    {{ request()->routeIs('admin.career.*')
    ? 'bg-[#FF6B55] border-[#1A1A1A] text-white shadow-[4px_4px_0px_0px_#1A1A1A] translate-x-[-2px] translate-y-[-2px]'
    : 'bg-white border-transparent hover:border-[#1A1A1A] text-[#1A1A1A] hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[-2px] hover:translate-y-[-2px]' }}"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    Career
                </a>
            </nav>


            <div class="p-4 border-t-2 border-[#1A1A1A] bg-[#F5F3EF]">
                <a href="{{ route('home') }}"
                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-bold text-[#1A1A1A] bg-white border-2 border-[#1A1A1A] rounded-lg hover:bg-[#1A1A1A] hover:text-white transition-all duration-200 shadow-[2px_2px_0px_0px_#1A1A1A] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Site
                </a>
            </div>
        </aside>

        {{-- Overlay for mobile sidebar --}}
        <div x-show="sidebarOpen" @click="sidebarOpen = false"
            class="fixed inset-0 z-30 bg-black bg-opacity-50 lg:hidden transition-opacity duration-300"></div>

        {{-- Main content --}}
        <main class="flex-1 w-full overflow-y-auto relative z-10">
            <div class="p-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    @push('styles')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700;800&family=Inter:wght@400;500;700&display=swap"
            rel="stylesheet">
    @endpush
</x-app-layout>