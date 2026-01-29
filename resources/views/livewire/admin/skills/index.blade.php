<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-[#1A1A1A]" style="font-family: 'Space Grotesk', sans-serif;">
            Skills
        </h1>
        <a href="{{ route('admin.skills.create') }}"
            class="px-5 py-3 bg-[#FF6B55] text-white font-bold rounded-lg border-2 border-[#1A1A1A] shadow-[4px_4px_0px_0px_#1A1A1A] hover:bg-[#1A1A1A] hover:shadow-none hover:translate-x-[2px] hover:translate-y-[2px] transition-all duration-200 flex items-center"
            style="font-family: 'Space Grotesk', sans-serif;">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Add Skill
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
                        class="px-6 py-4 text-left text-xs font-black text-[#1A1A1A] uppercase tracking-wider border-r-2 border-[#1A1A1A] last:border-r-0"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        Name</th>
                    <th scope="col"
                        class="px-6 py-4 text-left text-xs font-black text-[#1A1A1A] uppercase tracking-wider border-r-2 border-[#1A1A1A] last:border-r-0"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        Level</th>
                    <th scope="col"
                        class="px-6 py-4 text-right text-xs font-black text-[#1A1A1A] uppercase tracking-wider"
                        style="font-family: 'Space Grotesk', sans-serif;">
                        Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y-2 divide-[#1A1A1A]">
                @forelse ($skills as $skill)
                    <tr class="hover:bg-[#F5F3EF] transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap border-r-2 border-[#1A1A1A] last:border-r-0">
                            <div class="text-sm font-bold text-[#1A1A1A]">{{ $skill->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-r-2 border-[#1A1A1A] last:border-r-0">
                            @if($skill->show_level)
                                <span
                                    class="px-2 py-1 inline-flex text-xs leading-5 font-bold rounded border-2 border-[#1A1A1A]
                                                {{ $skill->level === 'Expert' ? 'bg-[#FF6B55] text-white shadow-[2px_2px_0px_0px_#1A1A1A]' : 'bg-white text-[#3D3D3D]' }}">
                                    {{ $skill->level }}
                                </span>
                            @else
                                <span
                                    class="px-2 py-1 inline-flex text-xs leading-5 font-bold rounded border-2 border-[#1A1A1A] bg-gray-100 text-gray-400">
                                    HIDDEN
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.skills.edit', $skill) }}"
                                class="inline-block px-3 py-1 bg-white border-2 border-[#1A1A1A] rounded text-[#1A1A1A] font-bold hover:bg-[#1A1A1A] hover:text-white transition-colors mr-2">
                                Edit
                            </a>
                            <button wire:click="delete({{ $skill->id }})"
                                wire:confirm="Are you sure you want to delete this skill?"
                                class="inline-block px-3 py-1 bg-white border-2 border-[#1A1A1A] rounded text-red-600 font-bold hover:bg-red-600 hover:text-white transition-colors">
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center text-[#3D3D3D]">
                                <svg class="w-12 h-12 mb-4 text-[#1A1A1A] opacity-20" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <p class="text-lg font-bold" style="font-family: 'Space Grotesk', sans-serif;">No Skills
                                    Found</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $skills->links() }}
    </div>
</div>