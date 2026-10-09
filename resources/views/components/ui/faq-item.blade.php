@props([
    'question',
    'open' => false,
])

<div 
    x-data="{ isOpen: {{ $open ? 'true' : 'false' }} }" 
    class="border border-zinc-200 rounded-2xl bg-white overflow-hidden transition-all duration-200 shadow-sm hover:border-zinc-300"
>
    <button 
        type="button" 
        @click="isOpen = !isOpen" 
        class="w-full text-left px-6 py-5 sm:px-8 sm:py-6 flex items-center justify-between gap-4 font-heading font-extrabold text-black text-lg sm:text-xl transition-colors hover:text-[#FF0000] focus:outline-none"
        :aria-expanded="isOpen"
    >
        <span class="pr-2">{{ $question }}</span>
        <span 
            class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-zinc-100 flex items-center justify-center text-black transition-all duration-300"
            :class="{ 'rotate-180 bg-[#FF0000] text-white': isOpen }"
        >
            <svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
            </svg>
        </span>
    </button>
    <div 
        x-show="isOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-250"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="px-6 pb-6 pt-1 sm:px-8 sm:pb-8 text-zinc-600 text-base sm:text-lg leading-relaxed border-t border-zinc-100"
    >
        {{ $slot }}
    </div>
</div>
