<div class="space-y-8">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-extrabold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
            Career Management
        </h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Experience -->
        <a href="{{ route('admin.career.experience.index') }}"
            class="group bg-white border-2 border-[#1A1A1A] p-6 rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none transition-all duration-200">
            <div class="flex flex-col items-center text-center space-y-4">
                <div
                    class="w-12 h-12 bg-[#FF6B55] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-black text-xl text-[#1A1A1A]">Experiences</h3>
                    <p class="text-sm font-bold text-[#3D3D3D] opacity-60">Work history & roles</p>
                </div>
            </div>
        </a>

        <!-- Education -->
        <a href="{{ route('admin.career.education.index') }}"
            class="group bg-white border-2 border-[#1A1A1A] p-6 rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none transition-all duration-200">
            <div class="flex flex-col items-center text-center space-y-4">
                <div
                    class="w-12 h-12 bg-[#4ECDC4] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-black text-xl text-[#1A1A1A]">Education</h3>
                    <p class="text-sm font-bold text-[#3D3D3D] opacity-60">Academic background</p>
                </div>
            </div>
        </a>

        <!-- Certifications -->
        <a href="{{ route('admin.career.certification.index') }}"
            class="group bg-white border-2 border-[#1A1A1A] p-6 rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none transition-all duration-200">
            <div class="flex flex-col items-center text-center space-y-4">
                <div
                    class="w-12 h-12 bg-[#FFD93D] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-[#1A1A1A]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-black text-xl text-[#1A1A1A]">Certifications</h3>
                    <p class="text-sm font-bold text-[#3D3D3D] opacity-60">Credentials & courses</p>
                </div>
            </div>
        </a>

        <!-- Languages -->
        <a href="{{ route('admin.career.language.index') }}"
            class="group bg-white border-2 border-[#1A1A1A] p-6 rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none transition-all duration-200">
            <div class="flex flex-col items-center text-center space-y-4">
                <div
                    class="w-12 h-12 bg-[#6C5CE7] border-2 border-[#1A1A1A] rounded-lg flex items-center justify-center text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5h12M9 3v2m1.048 9.5a18.022 18.022 0 01-3.827-5.802M10.999 5h7a2 2 0 012 2v10a2 2 0 01-2 2h-5m-9 0h5a2 2 0 002-2v-3M3 19l6-6m3-1c0 6.667-4 6.706-7 4.5">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-black text-xl text-[#1A1A1A]">Languages</h3>
                    <p class="text-sm font-bold text-[#3D3D3D] opacity-60">Native & learned</p>
                </div>
            </div>
        </a>
    </div>
</div>