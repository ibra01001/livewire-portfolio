<div>
    <div class="mb-12">
        <h1 class="text-4xl font-extrabold text-[#1A1A1A] mb-2" style="font-family: 'Space Grotesk', sans-serif;">
            Dashboard
        </h1>
        <p class="text-lg text-[#3D3D3D] font-medium">Here's what's happening in your portfolio.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-12">
        <!-- Projects Card -->
        <div
            class="bg-white border-2 border-[#1A1A1A] rounded-lg p-6 shadow-[4px_4px_0px_0px_#1A1A1A] hover:-translate-y-1 transition-transform duration-200">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 bg-[#FF6B55] border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                </div>
                <span class="text-3xl font-bold text-[#1A1A1A]"
                    style="font-family: 'Space Grotesk', sans-serif;">{{ $projectsCount }}</span>
            </div>
            <div>
                <h3 class="font-bold text-[#1A1A1A] mb-1">Total Projects</h3>
                <a href="{{ route('admin.projects.index') }}"
                    class="text-sm font-bold text-[#FF6B55] hover:underline flex items-center">
                    View All <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Skills Card -->
        <div
            class="bg-white border-2 border-[#1A1A1A] rounded-lg p-6 shadow-[4px_4px_0px_0px_#1A1A1A] hover:-translate-y-1 transition-transform duration-200">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 bg-white border-2 border-[#1A1A1A] rounded-md flex items-center justify-center text-[#1A1A1A]">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="text-3xl font-bold text-[#1A1A1A]"
                    style="font-family: 'Space Grotesk', sans-serif;">{{ $skillsCount }}</span>
            </div>
            <div>
                <h3 class="font-bold text-[#1A1A1A] mb-1">Total Skills</h3>
                <a href="{{ route('admin.skills.index') }}"
                    class="text-sm font-bold text-[#1A1A1A] hover:text-[#FF6B55] hover:underline flex items-center transition-colors">
                    Manage <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Messages Card -->
        <div
            class="bg-white border-2 border-[#1A1A1A] rounded-lg p-6 shadow-[4px_4px_0px_0px_#1A1A1A] hover:-translate-y-1 transition-transform duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-[#1A1A1A] rounded-full flex items-center justify-center text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <span class="text-3xl font-bold text-[#1A1A1A]"
                    style="font-family: 'Space Grotesk', sans-serif;">{{ $messagesCount }}</span>
            </div>
            <div>
                <h3 class="font-bold text-[#1A1A1A] mb-1">Inbox</h3>
                <a href="{{ route('admin.messages.index') }}"
                    class="text-sm font-bold text-[#1A1A1A] hover:text-[#FF6B55] hover:underline flex items-center transition-colors">
                    Read Messages <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Profile Card -->
        <div
            class="bg-[#1A1A1A] border-2 border-[#1A1A1A] rounded-lg p-6 shadow-[4px_4px_0px_0px_#1A1A1A] hover:-translate-y-1 transition-transform duration-200 text-white">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 bg-white border-2 border-white rounded-full flex items-center justify-center text-[#1A1A1A]">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <span class="text-3xl font-bold"
                    style="font-family: 'Space Grotesk', sans-serif;">{{ $totalViews }}+</span>
            </div>
            <div>
                <h3 class="font-bold text-white mb-1">Profile Visits</h3>
                <a href="{{ route('admin.profile.edit') }}"
                    class="text-sm font-bold text-[#FF6B55] hover:underline flex items-center">
                    Edit Profile <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <h2 class="text-2xl font-bold text-[#1A1A1A] mb-6" style="font-family: 'Space Grotesk', sans-serif;">Quick Actions
    </h2>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Add Project -->
        <a href="{{ route('admin.projects.create') }}"
            class="flex items-center p-6 bg-white border-2 border-[#1A1A1A] rounded-lg shadow-sm hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:-translate-y-1 transition-all duration-200 group">
            <div
                class="w-12 h-12 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-[#1A1A1A] group-hover:bg-[#FF6B55] group-hover:text-white transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="font-bold text-[#1A1A1A] text-lg group-hover:text-[#FF6B55] transition-colors"
                    style="font-family: 'Space Grotesk', sans-serif;">Add New Project</h3>
                <p class="text-sm text-[#3D3D3D]">Showcase your latest work</p>
            </div>
        </a>

        <!-- Add Skill -->
        <a href="{{ route('admin.skills.create') }}"
            class="flex items-center p-6 bg-white border-2 border-[#1A1A1A] rounded-lg shadow-sm hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:-translate-y-1 transition-all duration-200 group">
            <div
                class="w-12 h-12 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-[#1A1A1A] group-hover:bg-[#FF6B55] group-hover:text-white transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="font-bold text-[#1A1A1A] text-lg group-hover:text-[#FF6B55] transition-colors"
                    style="font-family: 'Space Grotesk', sans-serif;">Add New Skill</h3>
                <p class="text-sm text-[#3D3D3D]">Update your expertise area</p>
            </div>
        </a>

        <!-- Update Profile -->
        <a href="{{ route('admin.profile.edit') }}"
            class="flex items-center p-6 bg-white border-2 border-[#1A1A1A] rounded-lg shadow-sm hover:shadow-[4px_4px_0px_0px_#1A1A1A] hover:-translate-y-1 transition-all duration-200 group">
            <div
                class="w-12 h-12 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-[#1A1A1A] group-hover:bg-[#FF6B55] group-hover:text-white transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="font-bold text-[#1A1A1A] text-lg group-hover:text-[#FF6B55] transition-colors"
                    style="font-family: 'Space Grotesk', sans-serif;">Update Profile</h3>
                <p class="text-sm text-[#3D3D3D]">Keep your bio current</p>
            </div>
        </a>
    </div>
</div>