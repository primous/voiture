@props([
    'quote' => '',
    'author' => '',
    'vehicle' => '',
    'badge' => 'Achat vérifié Reinex',
    'rating' => 5,
])

<div class="bg-white rounded-[16px] border border-[#E5E5E5] p-6 md:p-8 flex flex-col justify-between hover:border-black/30 hover:shadow-md transition-all duration-300">
    <div>
        <!-- Etoiles & Badge Achat vérifié -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-1" aria-label="Note {{ $rating }} sur 5">
                @for ($i = 0; $i < $rating; $i++)
                    <svg class="w-4 h-4 text-[#FF0000] fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                @endfor
            </div>

            <span class="inline-flex items-center text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full">
                <svg class="w-3 h-3 mr-1 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                {{ $badge }}
            </span>
        </div>

        <!-- Citation -->
        <blockquote class="text-base text-neutral-800 leading-relaxed italic mb-6">
            “{{ $quote }}”
        </blockquote>
    </div>

    <!-- Auteur & Véhicule acheté -->
    <div class="pt-4 border-t border-[#E5E5E5]/70 flex items-center justify-between">
        <div>
            <p class="font-bold text-black font-heading text-sm sm:text-base">
                {{ $author }}
            </p>
            @if ($vehicle)
                <p class="text-xs text-[#666666]">
                    {{ $vehicle }}
                </p>
            @endif
        </div>
        <div class="w-8 h-8 rounded-full bg-[#F7F7F7] flex items-center justify-center text-xs font-bold text-black font-mono">
            {{ strtoupper(substr($author, 0, 1)) }}
        </div>
    </div>
</div>
