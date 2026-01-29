<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
            Add New Experience
        </h1>
        <a href="{{ route('admin.career.experience.index') }}"
            class="px-5 py-3 bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[2px] hover:translate-y-[2px] transition-all duration-200"
            style="font-family: 'Space Grotesk', sans-serif;">
            Back to List
        </a>
    </div>

    <div class="bg-white border-2 border-[#1A1A1A] rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] p-8 max-w-2xl mx-auto">
        <form wire:submit="save" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Role -->
                <div>
                    <label for="role"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Role</label>
                    <input type="text" id="role" wire:model="role"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('role') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Company -->
                <div>
                    <label for="company"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Company</label>
                    <input type="text" id="company" wire:model="company"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('company') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Company Logo -->
            <div>
                <label class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Company Logo
                    (Optional)</label>
                <div
                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-[#1A1A1A] border-dashed rounded-md hover:bg-[#F5F3EF] transition-colors relative">
                    <div class="space-y-1 text-center">
                        @if ($company_logo)
                            <div class="mx-auto h-20 w-20 relative">
                                <img src="{{ $company_logo->temporaryUrl() }}" class="h-20 w-20 object-contain mx-auto">
                                <button type="button" wire:click="$set('company_logo', null)"
                                    class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 border-2 border-[#1A1A1A]">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        @else
                            <div class="flex text-sm text-[#3D3D3D] justify-center">
                                <label for="logo-upload"
                                    class="relative cursor-pointer bg-white rounded-md font-bold text-[#FF6B55] hover:text-[#1A1A1A]">
                                    <span>Upload a logo</span>
                                    <input id="logo-upload" wire:model="company_logo" type="file" class="sr-only">
                                </label>
                            </div>
                        @endif
                    </div>
                </div>
                @error('company_logo') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Location -->
            <div>
                <label for="location"
                    class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Location</label>
                <input type="text" id="location" wire:model="location" placeholder="e.g. Remote, New York, etc."
                    class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                @error('location') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Start Date -->
                <div>
                    <label for="start_date"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Start Date</label>
                    <input type="date" id="start_date" wire:model="start_date"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('start_date') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- End Date -->
                <div>
                    <label for="end_date"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">End Date (Leave
                        blank for Present)</label>
                    <input type="date" id="end_date" wire:model="end_date"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('end_date') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Description -->
            <div>
                <label for="description"
                    class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Description</label>
                <textarea id="description" wire:model="description" rows="4"
                    class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none resize-none shadow-sm"></textarea>
                @error('description') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Order -->
                <div>
                    <label for="order"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Order</label>
                    <input type="number" id="order" wire:model="order"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('order') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Status -->
                <div class="flex flex-col justify-end">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" wire:model="is_active" class="sr-only peer">
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#FF6B55] border-2 border-[#1A1A1A]">
                        </div>
                        <span class="ms-3 text-sm font-bold text-[#1A1A1A] uppercase tracking-wide">Active</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="px-6 py-3 bg-[#FF6B55] border-2 border-[#1A1A1A] text-white font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[4px] hover:translate-y-[4px] transition-all duration-200">
                    Save Experience
                </button>
            </div>
        </form>
    </div>
</div>