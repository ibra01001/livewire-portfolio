<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
            Edit Language
        </h1>
        <a href="{{ route('admin.career.language.index') }}"
            class="px-5 py-3 bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[2px] hover:translate-y-[2px] transition-all duration-200"
            style="font-family: 'Space Grotesk', sans-serif;">
            Back to List
        </a>
    </div>

    <div class="bg-white border-2 border-[#1A1A1A] rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] p-8 max-w-md mx-auto">
        <form wire:submit="save" class="space-y-6">
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Language
                    Name</label>
                <input type="text" id="name" wire:model="name"
                    class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                @error('name') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-1 gap-6">
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
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-[#6C5CE7] border-2 border-[#1A1A1A]">
                        </div>
                        <span class="ms-3 text-sm font-bold text-[#1A1A1A] uppercase tracking-wide">Active</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="px-6 py-3 bg-[#6C5CE7] border-2 border-[#1A1A1A] text-white font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[4px] hover:translate-y-[4px] transition-all duration-200">
                    Update Language
                </button>
            </div>
        </form>
    </div>
</div>