@props([
    'id' => 1,
    'question' => '',
    'answer' => '',
])

<div 
    class="border border-[#E5E5E5] rounded-[14px] bg-white overflow-hidden transition-all duration-200"
    :class="{ 'border-[#FF0000] ring-1 ring-[#FF0000]/20 shadow-sm': activeAccordion === {{ $id }} }"
>
    <h3>
        <button 
            type="button"
            @click="activeAccordion = (activeAccordion === {{ $id }} ? null : {{ $id }})"
            class="w-full py-5 px-6 text-left flex items-center justify-between gap-4 font-bold text-black hover:text-[#FF0000] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF0000]"
            :aria-expanded="(activeAccordion === {{ $id }}).toString()"
            aria-controls="faq-answer-{{ $id }}"
            id="faq-btn-{{ $id }}"
        >
            <span class="text-base sm:text-lg font-heading tracking-tight leading-snug">
                {{ $question }}
            </span>
            <div 
                class="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-transform duration-300"
                :class="{ 'rotate-45 bg-[#FF0000] text-white': activeAccordion === {{ $id }}, 'bg-[#F7F7F7] text-black': activeAccordion !== {{ $id }} }"
            >
                <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
        </button>
    </h3>

    <div 
        id="faq-answer-{{ $id }}"
        role="region"
        aria-labelledby="faq-btn-{{ $id }}"
        x-show="activeAccordion === {{ $id }}"
        x-collapse
        x-cloak
        class="px-6 pb-6 pt-1 text-base text-[#666666] leading-relaxed border-t border-gray-100"
    >
        <p>
            {{ $answer }}
        </p>
    </div>
</div>
