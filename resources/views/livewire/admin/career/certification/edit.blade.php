<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
            Edit Certification
        </h1>
        <a href="{{ route('admin.career.certification.index') }}"
            class="px-5 py-3 bg-white border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[2px] hover:translate-y-[2px] transition-all duration-200"
            style="font-family: 'Space Grotesk', sans-serif;">
            Back to List
        </a>
    </div>

    <div class="bg-white border-2 border-[#1A1A1A] rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] p-8 max-w-2xl mx-auto">
        <form wire:submit="save" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label for="name"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Name</label>
                    <input type="text" id="name" wire:model="name"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('name') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Issuer -->
                <div>
                    <label for="issuer"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Issuer</label>
                    <input type="text" id="issuer" wire:model="issuer"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('issuer') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Year -->
                <div>
                    <label for="year"
                        class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Year</label>
                    <input type="number" id="year" wire:model="year"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('year') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- URL -->
                <div>
                    <label for="url" class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">URL
                        (Optional)</label>
                    <input type="url" id="url" wire:model="url"
                        class="w-full px-4 py-2 bg-white border-2 border-[#1A1A1A] rounded-md focus:ring-0 focus:border-[#FF6B55] outline-none shadow-sm">
                    @error('url') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- PDF Upload -->
            <div class="space-y-4">
                <label for="pdf"
                    class="block text-sm font-bold text-[#1A1A1A] mb-2 uppercase tracking-wide">Certification PDF
                    (Optional)</label>

                @if ($certification->pdf_path)
                    <div class="flex items-center space-x-4 p-4 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-md">
                        <svg class="w-8 h-8 text-[#FF6B55]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <div class="flex-grow">
                            <p class="text-sm font-bold text-[#1A1A1A]">Current PDF exists</p>
                            <a href="{{ Storage::url($certification->pdf_path) }}" target="_blank"
                                class="text-xs text-[#FF6B55] hover:underline font-bold">View Document</a>
                        </div>
                    </div>
                @endif

                <div
                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-[#1A1A1A] border-dashed rounded-md hover:bg-[#F5F3EF] transition-colors relative">
                    <div class="space-y-1 text-center">
                        @if ($pdf)
                            <div class="flex items-center space-x-2 text-green-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-bold">New PDF Ready: {{ $pdf->getClientOriginalName() }}</span>
                                <button type="button" wire:click="$set('pdf', null)"
                                    class="text-red-500 hover:text-red-700 font-bold ml-2">Cancel</button>
                            </div>
                        @else
                            <div class="flex text-sm text-[#3D3D3D] justify-center">
                                <label for="pdf-upload"
                                    class="relative cursor-pointer bg-white rounded-md font-bold text-[#FF6B55] hover:text-[#1A1A1A]">
                                    <span>Upload new PDF</span>
                                    <input id="pdf-upload" wire:model="pdf" type="file" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-[#3D3D3D] mt-1">PDF up to 5MB</p>
                        @endif
                    </div>
                </div>
                @error('pdf') <span class="text-red-500 text-xs font-bold mt-1 block">{{ $message }}</span> @enderror
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
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-[#FFD93D] border-2 border-[#1A1A1A]">
                        </div>
                        <span class="ms-3 text-sm font-bold text-[#1A1A1A] uppercase tracking-wide">Active</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="px-6 py-3 bg-[#FFD93D] border-2 border-[#1A1A1A] text-[#1A1A1A] font-bold rounded-lg shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[4px] hover:translate-y-[4px] transition-all duration-200">
                    Update Certification
                </button>
            </div>
        </form>
    </div>
</div>