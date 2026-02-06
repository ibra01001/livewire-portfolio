<?php

use Livewire\Volt\Component;

new class extends Component {
    // No auth logic needed for public portfolio
}; ?>

<nav x-data="{ open: false }" class="bg-[#1A1A1A] border-b-2 border-[#000000]">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" wire:navigate
                        class="font-black text-2xl text-[#FFFFFF] hover:text-[#FF6B55] transition-colors"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        RMBM
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" wire:navigate
                        class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] border-transparent hover:border-[#FF6B55]"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" wire:navigate
                        class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] border-transparent hover:border-[#FF6B55]"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projects')" wire:navigate
                        class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] border-transparent hover:border-[#FF6B55]"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <x-nav-link :href="route('career')" wire:navigate
                        class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] border-transparent hover:border-[#FF6B55]"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        {{ __('Career') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" wire:navigate
                        class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] border-transparent hover:border-[#FF6B55]"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        {{ __('Contact') }}
                    </x-nav-link>
                    @auth
                        <x-nav-link :href="route('admin.dashboard')" wire:navigate
                            class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] border-transparent hover:border-[#FF6B55]"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            Admin
                        </x-nav-link>
                    @endauth
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-[#FFFFFF] hover:text-[#FF6B55] hover:bg-[#1A1A1A] focus:outline-none transition duration-150 ease-in-out border-2 border-[#FFFFFF]">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t-2 border-[#1A1A1A] bg-[#1A1A1A]">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" wire:navigate
                class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] hover:bg-[#2A2A2A] border-transparent"
                style="font-family: 'Space Grotesk', sans-serif;">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" wire:navigate
                class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] hover:bg-[#2A2A2A] border-transparent"
                style="font-family: 'Space Grotesk', sans-serif;">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('projects')" wire:navigate
                class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] hover:bg-[#2A2A2A] border-transparent"
                style="font-family: 'Space Grotesk', sans-serif;">
                {{ __('Projects') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('career')" wire:navigate
                class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] hover:bg-[#2A2A2A] border-transparent"
                style="font-family: 'Space Grotesk', sans-serif;">
                {{ __('Career') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" wire:navigate
                class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] hover:bg-[#2A2A2A] border-transparent"
                style="font-family: 'Space Grotesk', sans-serif;">
                {{ __('Contact') }}
            </x-responsive-nav-link>
            @auth
                <x-responsive-nav-link :href="route('admin.dashboard')" wire:navigate
                    class="text-[#FFFFFF] font-bold hover:text-[#FF6B55] hover:bg-[#2A2A2A] border-transparent"
                    style="font-family: 'Space Grotesk', sans-serif;">
                    Admin
                </x-responsive-nav-link>
            @endauth
        </div>
    </div>
</nav>