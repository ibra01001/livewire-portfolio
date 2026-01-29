<div class="bg-[#F5F3EF] relative overflow-hidden">
    <x-site-background />
    <!-- Hero Section -->
    <section class="relative overflow-hidden min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-6 py-20 lg:py-32 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left Side: Text Content -->
                <div class="space-y-8">
                    <!-- Hand-drawn arrow pointing right -->
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.13 60.06"
                        class="w-24 h-auto mb-4">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #FF6B55;
                                }
                            </style>
                        </defs>
                        <path class="cls-1"
                            d="M-1382.25,1768.26a57.31,57.31,0,0,0-7-9.22c-2.53-2.79-5.26-5.41-8-8.09a1,1,0,0,1,0-1.35,54,54,0,0,1,6.08-4.42c-2.9-4.67-5.94-9.33-9-13.87a69,69,0,0,0-10.53-12.46,35.1,35.1,0,0,0-6.53-4.68,31.21,31.21,0,0,0-7.46-2.9,44.61,44.61,0,0,0-16.14-.51c-7.41,1-14.69,3.09-22,5a131.06,131.06,0,0,0-21.26,7.41,63.88,63.88,0,0,0-9.65,5.61,48.92,48.92,0,0,0-8.2,7.48,39.86,39.86,0,0,0-6,9.28,30.59,30.59,0,0,0-2.75,10.66.55.55,0,0,1-1.1-.06,31.11,31.11,0,0,1,2.6-11.15,40.12,40.12,0,0,1,6.1-9.73,49.48,49.48,0,0,1,8.41-7.82,64.14,64.14,0,0,1,9.89-5.8,129.66,129.66,0,0,1,21.54-7.51c7.32-2,14.64-4,22.23-5.09a46.89,46.89,0,0,1,16.78.46,32.59,32.59,0,0,1,7.92,3,37.26,37.26,0,0,1,6.93,4.87,69.66,69.66,0,0,1,10.89,12.77c1.59,2.29,3.11,4.62,4.62,6.94s3,4.68,4.43,7.07a29.29,29.29,0,0,1,6.59-2.7l0-.07c-.39-.6.43-1.29.9-.73.15.18.27.37.41.55a1,1,0,0,1,.74,1.12c1.77,3.1,2.13,6.91,2.18,10.43a49.62,49.62,0,0,1-1.88,15.23A.91.91,0,0,1-1382.25,1768.26Zm-6.22-22.13a65.51,65.51,0,0,1,7.14,16.81,56.07,56.07,0,0,0,.83-8.59c.08-3.76,0-7.56-1.52-11A63.35,63.35,0,0,0-1388.47,1746.13Zm-1.68.9a40.83,40.83,0,0,0-5,3.29c4.55,4.47,9,8.85,12.76,14.3A66.91,66.91,0,0,0-1390.15,1747Z"
                            transform="translate(1511.93 -1708.56)"></path>
                    </svg>

                    <div class="space-y-6">
                        <h1 class="text-5xl lg:text-7xl font-extrabold text-[#1A1A1A] leading-tight"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            Hi, I'm<br>
                            <span class="relative inline-block">
                                <span class="relative z-10">{{ $profile->name ?? 'Your Name' }}</span>
                                <svg width="567" height="25" viewBox="0 0 567 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M385.23 0.827769C381.154 0.817409 377.874 0.809073 375.89 0.805794C375.175 0.805794 374.486 0.818413 373.843 0.830179C373.04 0.844866 372.31 0.858226 371.694 0.844061C354.001 0.746669 335.311 0.757717 316.588 0.768785C305.883 0.775113 295.167 0.781448 284.62 0.767528C279.056 0.758253 273.484 0.802926 267.911 0.847614C265.85 0.864145 263.788 0.880677 261.726 0.894482C256.712 0.808007 251.739 0.876174 246.784 0.944104C244.503 0.97538 242.225 1.00661 239.948 1.02267C220.37 1.15495 200.75 1.14725 181.134 1.13955C174.268 1.13685 167.404 1.13416 160.541 1.13747C147.268 1.14532 133.993 1.14834 120.718 1.15136C90.8462 1.15815 60.9724 1.16495 31.1048 1.22677C28.9162 1.22995 26.7316 1.20306 24.5533 1.17626C17.9839 1.09542 11.4719 1.01529 5.0823 1.7625C5.0249 1.76888 4.9388 1.77526 4.8527 1.78164C4.7666 1.78802 4.6805 1.79439 4.6231 1.80077C2.73516 1.96382 2.56182 2.23656 2.39035 2.50636C2.30693 2.63761 2.22396 2.76816 1.94426 2.88505C-1.94636 4.54335 1.12789 5.06634 12.7232 4.82397C14.8496 4.78101 17.0845 4.82847 19.2757 4.875C19.6872 4.88373 20.0971 4.89244 20.5044 4.9005C25.4506 5.00619 33.1988 5.03307 39.1422 5.0537C40.3724 5.05796 41.5252 5.06196 42.5598 5.06634C46.2631 5.0858 50.1544 5.02612 53.9586 4.96777C57.6367 4.91136 61.2335 4.85619 64.5004 4.87501C75.6808 4.9356 86.8592 5.03419 98.0371 5.13277C115.095 5.28321 132.152 5.43364 149.214 5.44905C168.008 5.47103 186.803 5.37937 205.599 5.2877C219.526 5.21979 233.455 5.15186 247.385 5.13014C264.81 5.10463 282.235 5.11739 299.66 5.13014C317.085 5.1429 334.51 5.15566 351.934 5.13014C364.488 5.11364 377.04 5.1265 389.594 5.13936C415.843 5.16626 442.096 5.19316 468.372 4.95154C487.993 4.77248 507.76 4.92762 527.509 5.0826C534.491 5.13741 541.472 5.19219 548.443 5.23218C559.464 5.29596 566.659 4.42854 566.888 2.92332C567.09 1.57903 557.762 1.47732 551.372 1.40763C550.91 1.40259 550.464 1.39772 550.037 1.39257C509.587 0.907833 469.023 0.882341 428.471 0.895097C415.449 0.904574 397.013 0.857716 385.23 0.827769ZM269.511 19.7243C260.692 19.7442 251.853 19.7642 248.584 19.7727L248.413 19.777C247.458 19.801 246.58 19.823 245.918 19.811C237.194 19.811 228.089 19.8079 218.891 19.8047C209.501 19.8015 200.014 19.7983 190.735 19.7983C187.652 19.7983 184.564 19.8344 181.474 19.8705C179.725 19.891 177.976 19.9114 176.227 19.9253C173.041 19.8386 169.885 19.9069 166.743 19.9749C165.298 20.0061 163.857 20.0373 162.416 20.0534C152.071 20.1637 141.706 20.1718 131.337 20.1799C124.919 20.1849 118.499 20.19 112.081 20.2192C84.7315 20.3213 57.3696 20.4999 30.0204 21.0356C28.6389 21.0641 27.2581 21.0628 25.8807 21.0614C21.713 21.0572 17.5758 21.053 13.5395 21.8775C13.4757 21.8903 13.3354 21.9158 13.2588 21.9285C12.0665 22.1172 11.9644 22.3867 11.8625 22.6555C11.8128 22.7864 11.7633 22.9171 11.5878 23.0383C9.16411 24.7349 11.1158 25.2196 18.4634 24.8497C19.9084 24.7803 21.4372 24.8053 22.9264 24.8295C23.0805 24.832 23.2341 24.8345 23.3872 24.8369C25.912 24.8794 29.5812 24.8426 32.8771 24.8096C34.5268 24.793 36.0829 24.7774 37.3552 24.7732C39.6743 24.7539 42.1093 24.6639 44.492 24.5759C46.8537 24.4886 49.164 24.4032 51.2594 24.3905C60.2079 24.4223 69.1531 24.4511 78.0983 24.4798C87.0435 24.5085 95.9888 24.5372 104.937 24.5691C115.308 24.4989 125.675 24.4319 136.043 24.365C146.411 24.298 156.778 24.231 167.149 24.1609C178.197 24.1609 189.246 24.1577 200.293 24.1545C211.336 24.1513 222.378 24.1481 233.417 24.1481C238.735 24.1261 244.053 24.1135 249.371 24.101C268.648 24.0556 287.928 24.0102 307.224 23.5103C317.424 23.2399 327.685 23.1707 337.953 23.1015C344.635 23.0564 351.32 23.0114 357.993 22.9108C364.984 22.8087 369.525 21.8392 369.627 20.334C369.722 18.9871 363.884 19.0191 359.84 19.0413C359.518 19.043 359.207 19.0447 358.912 19.0457C334.366 19.2534 309.761 19.4611 285.153 19.6688L281.903 19.6962C278.227 19.7047 273.872 19.7145 269.511 19.7243Z"
                                        fill="#ff6b55" />
                                </svg>

                            </span>
                        </h1>

                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-[#FF6B55] rounded-full"></div>
                            <p class="text-2xl lg:text-3xl font-bold text-[#3D3D3D]"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                {{ $profile->title ?? 'Frontend Developer' }}
                            </p>
                        </div>
                    </div>

                    <p class="text-lg text-[#3D3D3D] leading-relaxed max-w-lg">
                        {{ $profile->bio ?? 'Passionate developer creating amazing web experiences with modern technologies. I love turning ideas into beautiful, functional applications.' }}
                    </p>

                    <!-- Social Links -->
                    <div class="flex flex-wrap gap-4 pt-4">
                        @if($profile?->github)
                            <a href="{{ $profile->github }}" target="_blank"
                                class="inline-flex items-center px-6 py-3 bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold hover:bg-[#1A1A1A] hover:text-white transition-all transform hover:-translate-y-1 hover:rotate-[-1deg]"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                                GitHub
                            </a>
                        @endif

                        @if($profile?->linkedin)
                            <a href="{{ $profile->linkedin }}" target="_blank"
                                class="inline-flex items-center px-6 py-3 bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold hover:bg-[#1A1A1A] hover:text-white transition-all transform hover:-translate-y-1 hover:rotate-[-1deg]"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                                LinkedIn
                            </a>
                        @endif

                        @if($profile?->twitter)
                            <a href="{{ $profile->twitter }}" target="_blank"
                                class="inline-flex items-center px-6 py-3 bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold hover:bg-[#1A1A1A] hover:text-white transition-all transform hover:-translate-y-1 hover:rotate-[-1deg]"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                                Twitter
                            </a>
                        @endif

                        <a href="mailto:{{ $profile->email ?? 'contact@example.com' }}"
                            class="inline-flex items-center px-6 py-3 bg-[#FF6B55] border-2 border-[#1A1A1A] text-white font-bold hover:bg-[#1A1A1A] transition-all transform hover:-translate-y-1 hover:rotate-[-1deg]"
                            style="font-family: 'Space Grotesk', sans-serif;">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Email Me
                        </a>
                    </div>

                    <!-- Small decorative elements -->
                    <div class="flex items-center space-x-4 pt-8">
                        <svg class="w-6 h-6 text-[#FF6B55]" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                        <svg class="w-4 h-4 text-[#1A1A1A]" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        <svg class="w-5 h-5 text-[#FF6B55]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                        </svg>

                    </div>
                </div>

                <!-- Right Side: Profile Image with Creative Frame -->
                <div class="relative">
                    <div class="relative inline-block">
                        <!-- Decorative frame elements -->
                        <div class="absolute -top-4 -left-4 w-16 h-16 border-t-4 border-l-4 border-[#FF6B55]"></div>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 border-b-4 border-r-4 border-[#1A1A1A]"></div>

                        <!-- Main image container -->
                        <div class="relative bg-white border-4 border-[#1A1A1A] p-2">
                            <img src="{{ $profile->image ? asset('storage/' . $profile->image) : 'https://via.placeholder.com/400x500/F5F3EF/1A1A1A?text=Your+Photo' }}"
                                alt="{{ $profile->name }}" class="w-full max-w-md h-auto object-cover">
                        </div>

                        <!-- Floating decorative elements -->
                        <div class="absolute -top-8 -right-8 w-12 h-12 bg-[#FF6B55] rounded-full border-2 border-[#1A1A1A] transition-transform hover:scale-110"
                            style="animation: bounce 2s infinite;"></div>
                        <div class="absolute top-1/2 -left-12 w-8 h-8 bg-white border-2 border-[#1A1A1A] transform rotate-45 transition-transform hover:scale-110"
                            style="animation: bounce 2s infinite 0.5s;"></div>
                    </div>

                    <!-- Code snippet decoration -->
                    <div
                        class="absolute -bottom-12 -left-8 bg-white border-2 border-[#1A1A1A] p-4 max-w-xs hidden lg:block transition-transform hover:-translate-y-1 hover:rotate-[-1deg]">
                        <div class="space-y-1 font-mono text-xs">
                            <div><span class="text-[#FF6B55]">const</span> <span class="text-[#1A1A1A]">brahim</span>
                                = {</div>
                            <div class="pl-4"><span class="text-[#3D3D3D]">Role:</span> <span
                                    class="text-[#FF6B55]">'Fullstack Developer'</span>,</div>
                            <div class="pl-4"><span class="text-[#3D3D3D]">skills:</span> [<a href="/about"
                                    wire:navigate><span class="text-[#FF6B55]">Php,javas...</span></a>]</div>
                            <div>};</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Scroll indicator -->
            <div class="text-center mt-20">
                <div class="inline-flex flex-col items-center space-y-2 cursor-pointer transition-transform hover:scale-110"
                    style="animation: bounce 2s infinite;">
                    <span class="text-sm font-medium text-[#3D3D3D] uppercase tracking-wider"
                        style="font-family: 'Space Grotesk', sans-serif;">Scroll Down</span>
                    <svg class="w-6 h-6 text-[#FF6B55]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Large decorative elements -->
        <div
            class="absolute top-20 right-10 w-64 h-64 border-4 border-[#FF6B55] rounded-full opacity-10 pointer-events-none">
        </div>
        <div class="absolute bottom-20 left-10 w-48 h-48 bg-[#FF6B55] opacity-5 pointer-events-none"></div>
    </section>
</div>

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700;800&family=Inter:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
@endpush