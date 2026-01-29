<div>
    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-[#1A1A1A] mb-2" style="font-family: 'Space Grotesk', sans-serif;">
            Messages
        </h1>
        <p class="text-[#3D3D3D] font-medium">Read what people are saying.</p>
    </div>

    <div class="bg-white border-2 border-[#1A1A1A] rounded-lg overflow-hidden shadow-[4px_4px_0px_0px_#1A1A1A]">
        <ul class="divide-y-2 divide-[#1A1A1A]">
            @forelse ($messages as $message)
                <li class="p-6 hover:bg-[#F5F3EF] transition duration-150 ease-in-out group">
                    <div class="flex justify-between items-start">
                        <div class="w-full">
                            <div class="flex flex-wrap justify-between items-center mb-3">
                                <h3 class="text-xl font-bold text-[#1A1A1A]"
                                    style="font-family: 'Space Grotesk', sans-serif;">
                                    {{ $message->name }}
                                </h3>
                                <span
                                    class="text-xs font-bold text-[#3D3D3D] bg-white border border-[#1A1A1A] px-2 py-1 rounded">
                                    {{ $message->created_at->format('M d, Y h:i A') }}
                                </span>
                            </div>
                            <p class="text-sm font-bold text-[#FF6B55] mb-4 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <a href="mailto:{{ $message->email }}" class="hover:underline">{{ $message->email }}</a>
                            </p>
                            <div
                                class="text-[#3D3D3D] whitespace-pre-line bg-[#F5F3EF] p-4 rounded-lg border-2 border-[#1A1A1A] shadow-sm relative">
                                <svg class="absolute -top-3 -left-2 w-6 h-6 text-[#1A1A1A] fill-white" viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 21L14.017 18C14.017 16.8954 13.1216 16 12.017 16H9C9 16 9 15 9 14C9 13 9 12 10 12H13C14.1046 12 15 11.1046 15 10V6C15 4.89543 14.1046 4 13 4H7C5.89543 4 5 4.89543 5 6V10C5 11.1046 5.89543 12 7 12H8V14C8 16.2091 9.79086 18 12 18H14.017ZM24.017 21L24.017 18C24.017 16.8954 23.1216 16 22.017 16H19C19 16 19 15 19 14C19 13 19 12 20 12H23C24.1046 12 25 11.1046 25 10V6C25 4.89543 24.1046 4 23 4H17C15.8954 4 15 4.89543 15 6V10C15 11.1046 15.8954 12 17 12H18V14C18 16.2091 19.7909 18 22 18H24.017Z"
                                        fill="currentColor" />
                                </svg>
                                {{ $message->message }}
                            </div>
                        </div>
                        <div class="ml-6">
                            <button wire:click="delete({{ $message->id }})"
                                wire:confirm="Are you sure you want to delete this message?"
                                class="w-10 h-10 flex items-center justify-center text-[#1A1A1A] bg-white border-2 border-[#1A1A1A] rounded-full hover:bg-red-500 hover:text-white transition-colors shadow-[2px_2px_0px_0px_#1A1A1A] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none"
                                title="Delete Message">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>
            @empty
                <li class="p-12 text-center text-[#3D3D3D]">
                    <div class="flex flex-col items-center justify-center">
                        <svg class="w-16 h-16 mb-4 text-[#1A1A1A] opacity-20" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                            </path>
                        </svg>
                        <p class="text-xl font-bold" style="font-family: 'Space Grotesk', sans-serif;">Inbox Empty</p>
                        <p>No new messages at the moment.</p>
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
    <div class="mt-6">
        {{ $messages->links() }}
    </div>
</div>