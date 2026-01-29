<div>
    <div class="flex justify-between items-center mb-8">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.career.index') }}" class="text-[#1A1A1A] hover:text-[#FFD93D] transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h1 class="text-3xl font-extrabold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
                Certifications
            </h1>
        </div>
        <a href="{{ route('admin.career.certification.create') }}"
            class="px-5 py-3 bg-[#FFD93D] text-[#1A1A1A] font-bold rounded-lg border-2 border-[#1A1A1A] shadow-[4px_4px_0px_0px_#1A1A1A] hover:shadow-none hover:translate-x-[2px] hover:translate-y-[2px] transition-all duration-200 flex items-center"
            style="font-family: 'Space Grotesk', sans-serif;">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Add Certification
        </a>
    </div>

    @if (session()->has('message'))
        <div class="mb-6 p-4 bg-[#F5F3EF] border-2 border-[#1A1A1A] rounded-lg shadow-sm flex items-center">
            <div
                class="flex-shrink-0 w-8 h-8 bg-green-500 border-2 border-[#1A1A1A] rounded-full flex items-center justify-center text-white mr-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <span class="font-bold text-[#1A1A1A]">{{ session('message') }}</span>
        </div>
    @endif

    <div class="bg-white border-2 border-[#1A1A1A] rounded-lg overflow-hidden shadow-[4px_4px_0px_0px_#1A1A1A]">
        <table class="min-w-full divide-y-2 divide-[#1A1A1A]">
            <thead class="bg-[#F5F3EF]">
                <tr>
                    <th scope="col"
                        class="px-6 py-4 text-left text-xs font-black text-[#1A1A1A] uppercase tracking-wider border-r-2 border-[#1A1A1A] last:border-r-0">
                        Order</th>
                    <th scope="col"
                        class="px-6 py-4 text-left text-xs font-black text-[#1A1A1A] uppercase tracking-wider border-r-2 border-[#1A1A1A] last:border-r-0">
                        Name & Issuer</th>
                    <th scope="col"
                        class="px-6 py-4 text-left text-xs font-black text-[#1A1A1A] uppercase tracking-wider border-r-2 border-[#1A1A1A] last:border-r-0">
                        Year</th>
                    <th scope="col"
                        class="px-6 py-4 text-left text-xs font-black text-[#1A1A1A] uppercase tracking-wider border-r-2 border-[#1A1A1A] last:border-r-0">
                        Status</th>
                    <th scope="col"
                        class="px-6 py-4 text-right text-xs font-black text-[#1A1A1A] uppercase tracking-wider">Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y-2 divide-[#1A1A1A]">
                @forelse ($certifications as $cert)
                    <tr class="hover:bg-[#F5F3EF] transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap border-r-2 border-[#1A1A1A] font-bold text-[#1A1A1A]">
                            {{ $cert->order }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-r-2 border-[#1A1A1A]">
                            <div>
                                <div class="text-sm font-bold text-[#1A1A1A]">{{ $cert->name }}</div>
                                <div class="text-xs font-bold text-[#3D3D3D] opacity-60">{{ $cert->issuer }}</div>
                            </div>
                        </td>
                        <td
                            class="px-6 py-4 whitespace-nowrap border-r-2 border-[#1A1A1A] text-sm font-bold text-[#1A1A1A]">
                            {{ $cert->year }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-r-2 border-[#1A1A1A]">
                            <button wire:click="toggleActive({{ $cert->id }})"
                                class="px-2 py-1 inline-flex text-xs leading-5 font-bold rounded border-2 border-[#1A1A1A] {{ $cert->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $cert->is_active ? 'Active' : 'Hidden' }}
                            </button>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.career.certification.edit', $cert) }}"
                                class="inline-block px-3 py-1 bg-white border-2 border-[#1A1A1A] rounded text-[#1A1A1A] font-bold hover:bg-[#1A1A1A] hover:text-white transition-colors mr-2">
                                Edit
                            </a>
                            <button wire:click="delete({{ $cert->id }})"
                                wire:confirm="Are you sure you want to delete this certification?"
                                class="inline-block px-3 py-1 bg-white border-2 border-[#1A1A1A] rounded text-red-600 font-bold hover:bg-red-600 hover:text-white transition-colors">
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-[#3D3D3D] font-bold">
                            No certifications found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $certifications->links() }}
    </div>
</div>