<div class="bg-[#F5F3EF] min-h-screen relative overflow-hidden">
    <x-site-background />

    <!-- Decorative Top Right Shape -->
    <div
        class="absolute top-0 right-0 w-64 h-64 border-l-4 border-b-4 border-[#1A1A1A] rounded-bl-full bg-[#FF6B55] opacity-5 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-6 py-20 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20 relative">
            <h2 class="text-5xl font-extrabold text-[#1A1A1A] mb-4 inline-block relative"
                style="font-family: 'Space Grotesk', sans-serif;">
                About Me
                <!-- Hand-drawn underline -->
                <svg class="absolute w-full h-4 -bottom-4 left-0 text-[#FF6B55]" viewBox="0 0 100 10"
                    preserveAspectRatio="none">
                    <path d="M0 5 Q 50 10, 100 5" stroke="currentColor" stroke-width="3" fill="none" />
                </svg>
            </h2>
            <p class="text-xl text-[#3D3D3D] max-w-2xl mx-auto mt-8 font-medium"
                style="font-family: 'Inter', sans-serif;">
                Detail-oriented developer with a knack for creating user-friendly interfaces.
            </p>
        </div>

        <!-- Bio & Stats Section -->
        <div class="grid lg:grid-cols-12 gap-12 items-start mb-24">
            <!-- Bio Text -->
            <div class="lg:col-span-8 space-y-8">
                <div
                    class="bg-white border-2 border-[#1A1A1A] p-8 rounded-lg shadow-[4px_4px_0px_0px_rgba(26,26,26,1)] transition-transform hover:-translate-y-1">
                    <h3 class="text-2xl font-bold text-[#1A1A1A] mb-4"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        <span class="text-[#FF6B55]">#</span> Who I Am
                    </h3>
                    <p class="text-lg text-[#3D3D3D] leading-relaxed mb-6" style="font-family: 'Inter', sans-serif;">
                        My full name is Remili Mohamed Brahim Mokhtar.
                    </p>
                    <p class="text-lg text-[#3D3D3D] leading-relaxed" style="font-family: 'Inter', sans-serif;">
                        I started learning everything related to computer science and programming when I was 20 years
                        old. I start with python and gdscript for fun and curiosities.
                        Then i chosed web dev path and toke it seriously as a career.
                    </p>
                </div>
            </div>

            <!-- Side Stats -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Stat Card 1 -->
                <div
                    class="bg-white border-2 border-[#1A1A1A] p-6 rounded-lg transition-transform hover:rotate-2 hover:scale-105">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-[#FF6B55] border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#1A1A1A]"
                                style="font-family: 'Space Grotesk', sans-serif;">{{ $skills->count() }}+</div>
                            <div class="text-sm font-bold text-[#3D3D3D] uppercase tracking-wide">Skill</div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div
                    class="bg-white border-2 border-[#1A1A1A] p-6 rounded-lg transition-transform hover:-rotate-2 hover:scale-105">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-white border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-[#1A1A1A]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#1A1A1A]"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                {{ $projects->count() }}
                            </div>
                            <div class="text-sm font-bold text-[#3D3D3D] uppercase tracking-wide">Projects</div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div
                    class="bg-white border-2 border-[#1A1A1A] p-6 rounded-lg transition-transform hover:rotate-1 hover:scale-105">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-[#3D3D3D] border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-white">
                            <span class="text-xl font-bold">∞</span>
                        </div>
                        <div>
                            <div class="text-lg font-bold text-[#1A1A1A]"
                                style="font-family: 'Space Grotesk', sans-serif;">Always</div>
                            <div class="text-sm font-bold text-[#3D3D3D] uppercase tracking-wide">Learning</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div>
            <div class="flex items-center space-x-4 mb-16">
                <svg class="w-8 h-8 text-[#FF6B55]" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
                <h3 class="text-3xl font-bold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
                    My Toolkit
                </h3>
            </div>

            @php
                $orderedCategories = ['language', 'framework', 'library', 'database', 'tool', 'other'];
                $groupedSkills = $skills->groupBy('category');
            @endphp

            @foreach ($orderedCategories as $category)
                @if(isset($groupedSkills[$category]) && $groupedSkills[$category]->count() > 0)
                    <div class="mb-20">
                        <!-- Category Header -->
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="bg-[#1A1A1A] text-white px-6 py-2 rounded-md transform -rotate-2 border-2 border-[#1A1A1A] shadow-[4px_4px_0px_0px_#FF6B55]">
                                <h3 class="text-xl font-bold font-space-grotesk capitalize">
                                    {{ $category == 'other' ? 'Additional Skills' : Str::plural($category) }}
                                </h3>
                            </div>
                            <div class="h-0.5 bg-[#1A1A1A] flex-grow opacity-10 border-t-2 border-dashed border-[#1A1A1A]">
                            </div>
                        </div>

                        <!-- Skills Grid -->

                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @foreach($groupedSkills[$category] as $skill)
                                <div
                                    class="group relative bg-white border-2 border-[#1A1A1A] rounded-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-[6px_6px_0px_0px_#1A1A1A] overflow-hidden">

                                    <!-- Logo Section - Centered -->
                                    <div
                                        class="relative bg-gradient-to-br from-[#F5F3EF] via-white to-[#F5F3EF] p-6 border-b-2 border-[#1A1A1A] group-hover:border-[#FF6B55] transition-colors">
                                        <!-- Icon Container -->
                                        <div class="relative w-24 h-24 mx-auto">
                                            <!-- Background circle -->
                                            <div
                                                class="absolute inset-0 bg-white border-2 border-[#1A1A1A] rounded-2xl group-hover:border-[#FF6B55] transition-all duration-300 group-hover:shadow-[3px_3px_0px_0px_#FF6B55]">
                                            </div>

                                            <!-- Image -->
                                            <div class="relative w-full h-full flex items-center justify-center p-4">
                                                @if($skill->image)
                                                    <img src="{{ asset('storage/' . $skill->image) }}" alt="{{ $skill->name }}"
                                                        class="max-w-full max-h-full object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-sm">
                                                @else
                                                    <span
                                                        class="text-3xl font-black text-[#1A1A1A] group-hover:text-[#FF6B55] transition-colors"
                                                        style="font-family: 'Space Grotesk', sans-serif;">
                                                        {{ strtoupper(substr($skill->name, 0, 1)) }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Decorative corner dot -->
                                        <div
                                            class="absolute top-3 right-3 w-2 h-2 bg-[#FF6B55] rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                    </div>

                                    <!-- Content Section -->
                                    <div class="p-4 text-center">
                                        <h4 class="text-lg font-bold text-[#1A1A1A] mb-2 group-hover:text-[#FF6B55] transition-colors"
                                            style="font-family: 'Space Grotesk', sans-serif;">
                                            {{ $skill->name }}
                                        </h4>

                                        <p class="text-sm text-[#3D3D3D] leading-snug line-clamp-3 mb-3">
                                            {{ $skill->description }}
                                        </p>

                                        @if ($skill->show_level && $skill->level)
                                            <span
                                                class="inline-block text-xs font-bold text-white bg-[#FF6B55] uppercase tracking-wider px-3 py-1 rounded-full border-2 border-[#1A1A1A]">
                                                {{ $skill->level }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach

            @if($skills->isEmpty())
                <div class="col-span-full py-16 text-center border-2 border-dashed border-[#3D3D3D] rounded-xl bg-white/50">
                    <p class="text-xl font-bold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">No skills
                        found</p>
                    <p class="text-[#3D3D3D] mt-2">Just wait, I'm learning...</p>
                </div>
            @endif
        </div>
    </div>
</div>

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700;800&family=Inter:wght@400;500;700&display=swap"
        rel="stylesheet">
@endpush