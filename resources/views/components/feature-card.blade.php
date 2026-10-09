@props([
    'title' => '',
    'description' => '',
    'icon' => null,
    'badge' => null,
    'step' => null,
    'dark' => false,
])

<div 
    @class([
        'group relative p-6 md:p-8 rounded-[16px] transition-all duration-300 border flex flex-col justify-between',
        'bg-white border-[#E5E5E5] hover:border-[#FF0000]/40 hover:shadow-lg hover:-translate-y-1' => !$dark,
        'bg-[#111111] border-neutral-800 text-white hover:border-[#FF0000]/60 hover:shadow-xl hover:-translate-y-1' => $dark,
    ])
>
    <div>
        <!-- Haut de carte : Icone & Badge / Etape -->
        <div class="flex items-center justify-between mb-6">
            @if ($icon)
                <div @class([
                    'w-12 h-12 rounded-xl flex items-center justify-center transition-colors duration-200',
                    'bg-[#FFF0F0] text-[#FF0000] group-hover:bg-[#FF0000] group-hover:text-white' => !$dark,
                    'bg-neutral-800 text-[#FF0000] group-hover:bg-[#FF0000] group-hover:text-white' => $dark,
                ])>
                    {!! $icon !!}
                </div>
            @endif

            @if ($step)
                <span class="text-3xl font-extrabold text-[#E5E5E5] group-hover:text-[#FF0000] transition-colors font-mono">
                    {{ $step }}
                </span>
            @endif

            @if ($badge)
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-[#FFF0F0] text-[#FF0000]">
                    {{ $badge }}
                </span>
            @endif
        </div>

        <!-- Titre -->
        <h3 @class([
            'text-xl font-bold mb-3 tracking-tight font-heading',
            'text-black' => !$dark,
            'text-white' => $dark,
        ])>
            {{ $title }}
        </h3>

        <!-- Description -->
        <p @class([
            'text-base leading-relaxed',
            'text-[#666666]' => !$dark,
            'text-gray-300' => $dark,
        ])>
            {{ $description }}
        </p>
    </div>

    @if ($slot->isNotEmpty())
        <div class="mt-6 pt-4 border-t border-[#E5E5E5]/60">
            {{ $slot }}
        </div>
    @endif
</div>
