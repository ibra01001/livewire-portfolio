<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
            Edit Education
        </h1>
        <a href="{{ route('admin.career.education.index') }}"
            class="px-5 py-3 bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[2px] hover:translate-y-[2px] transition-all duration-200"
            style="font-family: 'Space Grotesk', sans-serif;">
            Back to List
        </a>
    </div>

    <div class="bg-white border-2 border-[#1A1A1A] rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] p-8 max-w-2xl mx-auto">
        <form wire:submit="save" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Degree -->
                <div>
                    <label for="degree"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Degree</label>
                    <input type="text" id="degree" wire:model="degree"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('degree') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Institution -->
                <div>
                    <label for="institution"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Institution</label>
                    <input type="text" id="institution" wire:model="institution"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('institution') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
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
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">End Date</label>
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
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-[#FF6B55] border-2 border-[#1A1A1A]">
                        </div>
                        <span class="ms-3 text-sm font-bold text-[#1A1A1A] uppercase tracking-wide">Active</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="px-6 py-3 bg-[#4ECDC4] border-2 border-[#1A1A1A] text-white font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[4px] hover:translate-y-[4px] transition-all duration-200">
                    Update Education
                </button>
            </div>
        </form>
    </div>
</div>