<div class="bg-[#F5F3EF] min-h-screen relative overflow-hidden">
    <x-site-background />

    <!-- Decorative Top Right Shape -->
    <div
        class="absolute top-0 right-0 w-64 h-64 border-l-4 border-b-4 border-[#1A1A1A] rounded-bl-full bg-[#FFD93D] opacity-5 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-6 py-20 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20 relative">
            <h2 class="text-5xl font-extrabold text-[#1A1A1A] mb-4 inline-block relative"
                style="font-family: 'Space Grotesk', sans-serif;">
                My Career
                <!-- Hand-drawn underline -->
                <svg class="absolute w-full h-4 -bottom-4 left-0 text-[#FF6B55]" viewBox="0 0 100 10"
                    preserveAspectRatio="none">
                    <path d="M0 5 Q 50 10, 100 5" stroke="currentColor" stroke-width="3" fill="none" />
                </svg>
            </h2>
            <p class="text-xl text-[#3D3D3D] max-w-2xl mx-auto mt-8 font-medium">
                My professional journey, academic background, and official certifications.
            </p>
        </div>

        <!-- Experience Section (Timeline) -->
        <div class="mb-24">
            <div class="flex items-center space-x-4 mb-12">
                <div
                    class="w-12 h-12 bg-[#FF6B55] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-white shadow-[2px_2px_0px_0px_#1A1A1A]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">Work
                    Experience</h3>
            </div>

            @if($profile && $profile->experiences->count() > 0)
                <div class="relative pl-8 border-l-4 border-[#1A1A1A] space-y-20 ml-4">
                    @foreach($profile->experiences as $experience)
                        <!-- Experience Card -->
                        <div class="relative">


                            <div
                                class="bg-white border-2 border-[#1A1A1A] rounded-xl shadow-[8px_8px_0px_0px_#1A1A1A] hover:shadow-[12px_12px_0px_0px_#1A1A1A] transition-all duration-300 hover:-translate-x-1 hover:-translate-y-1 group">

                                <div class="p-8">
                                    <!-- Top Section: Logo + Main Info -->
                                    <div class="flex flex-col md:flex-row gap-8 mb-6">
                                        <!-- LOGO CONTAINER -->
                                        @if($experience->company_logo)
                                            <div class="flex-shrink-0 mx-auto md:mx-0">
                                                <div class="relative">
                                                    <!-- Logo frame -->
                                                    <div
                                                        class="w-24 h-24 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-2xl p-3 shadow-[4px_4px_0px_0px_#FF6B55] flex items-center justify-center overflow-hidden transition-transform group-hover:rotate-3">
                                                        <img src="{{ asset('storage/' . $experience->company_logo) }}"
                                                            alt="{{ $experience->company }} logo"
                                                            class="max-w-full max-h-full object-contain filter group-hover:scale-110 transition-transform duration-300">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Main Content -->
                                        <div class="flex-1 min-w-0">
                                            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                                                <div>
                                                    <!-- Role Title -->
                                                    <h4 class="text-2xl font-black text-[#1A1A1A] mb-1 leading-tight"
                                                        style="font-family: 'Space Grotesk', sans-serif;">
                                                        {{ $experience->role }}
                                                    </h4>

                                                    <!-- Company Name -->
                                                    <div class="flex items-center gap-3 mb-2">
                                                        <span class="text-xl font-bold text-[#FF6B55]"
                                                            style="font-family: 'Space Grotesk', sans-serif;">
                                                            {{ $experience->company }}
                                                        </span>
                                                        @if(!$experience->end_date)
                                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-black bg-[#4ECDC4] text-white border-2 border-[#1A1A1A]">
                                                                CURRENT
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!-- Meta Info -->
                                                <div class="flex flex-col items-start md:items-end gap-2">
                                                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-lg text-sm font-bold text-[#1A1A1A]">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                        </svg>
                                                        {{ $experience->start_date?->format('M Y') }} -
                                                        {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
                                                    </div>
                                                    
                                                    @if($experience->location)
                                                        <div class="inline-flex items-center gap-1.5 text-sm font-bold text-[#3D3D3D] opacity-60">
                                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            {{ $experience->location }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    @if($experience->description)
                                        <div class="border-t-2 border-dashed border-[#1A1A1A] pt-6 group-hover:border-solid transition-colors duration-300">
                                            <p class="text-[#3D3D3D] text-base leading-relaxed whitespace-pre-line font-medium">
                                                {{ $experience->description }}
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
@else
                    <!-- IMPROVED: Better empty state with icon and improved contrast -->
                    <div class="bg-white border-2 border-dashed border-[#1A1A1A] p-12 text-center rounded-lg">
                        <svg class="w-16 h-16 mx-auto mb-4 text-[#1A1A1A] opacity-20" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <p class="text-lg font-bold text-[#3D3D3D] opacity-60">New opportunities loading soon...</p>
                    </div>
                @endif
            </div>

            <!-- Two Column Layout for Education & Others -->
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Education -->
                <div>
                    <div class="flex items-center space-x-4 mb-8">
                        <div
                            class="w-10 h-10 bg-[#4ECDC4] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-white shadow-[2px_2px_0px_0px_#1A1A1A]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
                            Education</h3>
                    </div>

                    <div class="space-y-10">
                    @forelse($profile ? $profile->educations : [] as $edu)
                        <div
                            class="bg-white border-2 border-[#1A1A1A] p-6 rounded-xl shadow-[6px_6px_0px_0px_#1A1A1A] hover:shadow-[10px_10px_0px_0px_#4ECDC4] transition-all duration-300 hover:-translate-y-1 group">
                            <h4 class="text-xl font-black text-[#1A1A1A] mb-1 leading-tight group-hover:text-[#4ECDC4] transition-colors"
                                style="font-family: 'Space Grotesk', sans-serif;">{{ $edu->degree }}</h4>
                            <p class="text-[#4ECDC4] font-bold text-lg mb-2">{{ $edu->institution }}</p>
                            
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-lg text-xs font-bold text-[#1A1A1A]">
                                {{ $edu->start_date?->format('Y') }} -
                                {{ $edu->end_date ? $edu->end_date->format('Y') : 'Present' }}
                            </div>

                            @if($edu->description)
                                <p class="text-sm text-[#3D3D3D] mt-4 leading-relaxed font-medium border-t-2 border-dashed border-[#1A1A1A] pt-4 opacity-80 group-hover:opacity-100 transition-opacity">{{ $edu->description }}</p>
                            @endif
                        </div>
                    @empty
                        <!-- IMPROVED: Better empty state with icon -->
                        <div class="bg-white border-2 border-dashed border-[#1A1A1A] p-8 text-center rounded-xl">
                            <svg class="w-12 h-12 mx-auto mb-3 text-[#4ECDC4] opacity-30" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                            <p class="font-bold text-[#3D3D3D] opacity-60">Nothing to show yet</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Certs & Languages -->
            <div class="space-y-16">
                <!-- Certifications -->
                <div>
                    <div class="flex items-center space-x-4 mb-8">
                        <div
                            class="w-10 h-10 bg-[#FFD93D] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-[#1A1A1A] shadow-[2px_2px_0px_0px_#1A1A1A]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1A1A1A]"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            Certifications</h3>
                    </div>

                    <div class="space-y-6">
                        @forelse($profile ? $profile->certifications : [] as $cert)
                            <div
                                class="bg-white border-2 border-[#1A1A1A] p-5 rounded-xl flex justify-between items-center shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-[8px_8px_0px_0px_#FFD93D] transition-all duration-300 hover:-translate-x-1 group">
                                <div class="flex-1 min-w-0 pr-4">
                                    <h4 class="text-lg font-black text-[#1A1A1A] truncate group-hover:text-[#FF6B55] transition-colors">{{ $cert->name }}</h4>
                                    <p class="text-sm font-bold text-[#3D3D3D] opacity-70 mt-1 flex items-center gap-2">
                                        {{ $cert->issuer }}
                                        <span class="w-1.5 h-1.5 bg-[#1A1A1A] rounded-full opacity-20"></span>
                                        {{ $cert->year }}
                                    </p>
                                </div>
                                    <div class="flex items-center gap-3 flex-shrink-0">
                                        @if($cert->url)
                                            <!-- IMPROVED: Added focus state for accessibility -->
                                            <a href="{{ $cert->url }}" target="_blank" title="Official Website"
                                                class="text-[#FF6B55] hover:rotate-12 transition-transform focus:outline-none focus:ring-2 focus:ring-[#FF6B55] focus:ring-offset-2 rounded"
                                                aria-label="View {{ $cert->name }} official website">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                    </path>
                                                </svg>
                                            </a>
                                        @endif
                                        @if($cert->pdf_path)
                                            <!-- IMPROVED: Fixed layout - icon and text now inline with flex, shortened label, added focus state -->
                                            <a href="{{ Storage::url($cert->pdf_path) }}" target="_blank"
                                                class="flex items-center gap-1 text-[#1A1A1A] hover:scale-105 transition-transform group/pdf focus:outline-none focus:ring-2 focus:ring-[#FFD93D] focus:ring-offset-2 rounded"
                                                aria-label="View {{ $cert->name }} certificate PDF">
                                                <svg class="w-5 h-5 group-hover/pdf:text-[#FFD93D] transition-colors"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                                <span
                                                    class="text-xs font-bold text-[#3D3D3D] opacity-60 group-hover/pdf:opacity-100 transition-opacity">view PDF</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <!-- IMPROVED: Better empty state with icon -->
                                <div class="bg-white border-2 border-dashed border-[#1A1A1A] p-8 text-center rounded-lg">
                                    <svg class="w-12 h-12 mx-auto mb-3 text-[#FFD93D] opacity-30" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                        </path>
                                    </svg>
                                    <p class="font-bold text-[#3D3D3D] opacity-60">No certifications added.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Languages -->
                    <div>
                        <div class="flex items-center space-x-4 mb-8">
                            <div
                                class="w-10 h-10 bg-[#6C5CE7] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-white shadow-[2px_2px_0px_0px_#1A1A1A]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5h12M9 3v2m1.048 9.5a18.022 18.022 0 01-3.827-5.802M10.999 5h7a2 2 0 012 2v10a2 2 0 01-2 2h-5m-9 0h5a2 2 0 002-2v-3M3 19l6-6m3-1c0 6.667-4 6.706-7 4.5">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-[#1A1A1A]"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                Languages</h3>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            @forelse($profile ? $profile->languages : [] as $lang)
                                <!-- IMPROVED: Reversed hover animation (pop out effect), better padding, cursor-default -->
                                <div
                                    class="bg-white border-2 border-[#1A1A1A] px-6 py-3 rounded-full font-bold text-[#1A1A1A] shadow-[3px_3px_0px_0px_#6C5CE7] hover:shadow-[5px_5px_0px_0px_#6C5CE7] hover:translate-x-[-2px] hover:translate-y-[-2px] transition-all duration-200 cursor-default">
                                    {{ $lang->name }}
                                </div>
                            @empty
                                <!-- IMPROVED: Better empty state -->
                                <div
                                    class="w-full bg-white border-2 border-dashed border-[#1A1A1A] p-8 text-center rounded-lg">
                                    <svg class="w-12 h-12 mx-auto mb-3 text-[#6C5CE7] opacity-30" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5h12M9 3v2m1.048 9.5a18.022 18.022 0 01-3.827-5.802M10.999 5h7a2 2 0 012 2v10a2 2 0 01-2 2h-5m-9 0h5a2 2 0 002-2v-3M3 19l6-6m3-1c0 6.667-4 6.706-7 4.5">
                                        </path>
                                    </svg>
                                    <p class="font-bold text-[#3D3D3D] opacity-60">Communication is key.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
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
    @endpush